<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CrawlFilterConfiguration $filterConfiguration
 */
class SharePointCrawlerConfiguration extends Shape
{
    /**
     * @param array{filterConfiguration?: CrawlFilterConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
