<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfluenceCrawlerConfiguration $crawlerConfiguration
 * @property ConfluenceSourceConfiguration $sourceConfiguration
 */
class ConfluenceDataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     crawlerConfiguration?: ConfluenceCrawlerConfiguration,
     *     sourceConfiguration: ConfluenceSourceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
