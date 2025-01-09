<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SeedUrls
 * @property 'HOST_ONLY'|'SUBDOMAINS'|'EVERYTHING' $WebCrawlerMode
 */
class SeedUrlConfiguration extends Shape
{
    /**
     * @param array{
     *     SeedUrls: list<string>,
     *     WebCrawlerMode?: 'HOST_ONLY'|'SUBDOMAINS'|'EVERYTHING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
