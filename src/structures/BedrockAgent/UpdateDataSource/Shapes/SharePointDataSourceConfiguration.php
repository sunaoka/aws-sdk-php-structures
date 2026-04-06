<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SharePointSourceConfiguration $sourceConfiguration
 * @property SharePointCrawlerConfiguration|null $crawlerConfiguration
 */
class SharePointDataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     sourceConfiguration: SharePointSourceConfiguration,
     *     crawlerConfiguration?: SharePointCrawlerConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
