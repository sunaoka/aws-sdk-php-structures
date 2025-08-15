<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WebCrawlerLimits|null $crawlerLimits
 * @property list<string>|null $inclusionFilters
 * @property list<string>|null $exclusionFilters
 * @property 'HOST_ONLY'|'SUBDOMAINS'|null $scope
 * @property string|null $userAgent
 * @property string|null $userAgentHeader
 */
class WebCrawlerConfiguration extends Shape
{
    /**
     * @param array{
     *     crawlerLimits?: WebCrawlerLimits|null,
     *     inclusionFilters?: list<string>|null,
     *     exclusionFilters?: list<string>|null,
     *     scope?: 'HOST_ONLY'|'SUBDOMAINS'|null,
     *     userAgent?: string|null,
     *     userAgentHeader?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
