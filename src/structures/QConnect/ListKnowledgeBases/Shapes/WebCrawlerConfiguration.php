<?php

namespace Sunaoka\Aws\Structures\QConnect\ListKnowledgeBases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UrlConfiguration $urlConfiguration
 * @property WebCrawlerLimits|null $crawlerLimits
 * @property list<string>|null $inclusionFilters
 * @property list<string>|null $exclusionFilters
 * @property 'HOST_ONLY'|'SUBDOMAINS'|null $scope
 */
class WebCrawlerConfiguration extends Shape
{
    /**
     * @param array{
     *     urlConfiguration: UrlConfiguration,
     *     crawlerLimits?: WebCrawlerLimits|null,
     *     inclusionFilters?: list<string>|null,
     *     exclusionFilters?: list<string>|null,
     *     scope?: 'HOST_ONLY'|'SUBDOMAINS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
