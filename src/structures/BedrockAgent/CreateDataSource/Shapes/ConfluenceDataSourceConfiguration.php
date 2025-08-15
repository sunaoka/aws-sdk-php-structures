<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfluenceSourceConfiguration $sourceConfiguration
 * @property ConfluenceCrawlerConfiguration|null $crawlerConfiguration
 */
class ConfluenceDataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     sourceConfiguration: ConfluenceSourceConfiguration,
     *     crawlerConfiguration?: ConfluenceCrawlerConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
