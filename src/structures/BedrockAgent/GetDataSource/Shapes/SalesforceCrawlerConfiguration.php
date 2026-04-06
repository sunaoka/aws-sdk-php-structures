<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CrawlFilterConfiguration|null $filterConfiguration
 */
class SalesforceCrawlerConfiguration extends Shape
{
    /**
     * @param array{filterConfiguration?: CrawlFilterConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
