<?php

namespace Sunaoka\Aws\Structures\QConnect\ListKnowledgeBases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WebCrawlerLimits $crawlerLimits
 * @property list<string> $exclusionFilters
 * @property list<string> $inclusionFilters
 * @property 'HOST_ONLY'|'SUBDOMAINS' $scope
 * @property UrlConfiguration $urlConfiguration
 */
class WebCrawlerConfiguration extends Shape
{
    /**
     * @param array{
     *     crawlerLimits?: WebCrawlerLimits,
     *     exclusionFilters?: list<string>,
     *     inclusionFilters?: list<string>,
     *     scope?: 'HOST_ONLY'|'SUBDOMAINS',
     *     urlConfiguration: UrlConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
