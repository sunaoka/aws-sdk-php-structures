<?php

namespace Sunaoka\Aws\Structures\QConnect\ListKnowledgeBases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WebCrawlerLimits|null $crawlerLimits
 * @property list<string>|null $exclusionFilters
 * @property list<string>|null $inclusionFilters
 * @property 'HOST_ONLY'|'SUBDOMAINS'|null $scope
 * @property UrlConfiguration $urlConfiguration
 */
class WebCrawlerConfiguration extends Shape
{
    /**
     * @param array{
     *     crawlerLimits?: WebCrawlerLimits|null,
     *     exclusionFilters?: list<string>|null,
     *     inclusionFilters?: list<string>|null,
     *     scope?: 'HOST_ONLY'|'SUBDOMAINS'|null,
     *     urlConfiguration: UrlConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
