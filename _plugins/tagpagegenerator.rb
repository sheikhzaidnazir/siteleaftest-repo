module Jekyll

  class TagPage < Page
    def initialize(site, base, dir, tag)
      @site = site
      @base = base
      @dir = dir
      @name = 'index.html'

      self.process(@name)
      self.read_yaml(File.join(base, '_layouts'), site.config['blog']['tags']['layout'])
      self.data['tag'] = tag

      tag_title_prefix = site.config['blog']['tags']['title_prefix'] || 'blog - tag: '
      self.data['title'] = "#{tag_title_prefix}#{tag}"
      self.data['filter_tag'] = "#{tag}"
    end
  end

  class TagPageGenerator < Generator
    safe true

    def generate(site)
      if site.layouts.key? 'tag'
        dir = site.config['blog']['tags']['url'] || 'blog/tags/'
        site.tags.keys.each do |tag|
          tag_name = tag.gsub(/\s+/, '-')
          site.pages << TagPage.new(site, site.source, File.join(dir, tag_name), tag)
        end
      end
    end
  end

end