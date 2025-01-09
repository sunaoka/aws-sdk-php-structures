<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SharePointCrawlerConfiguration $crawlerConfiguration
 * @property SharePointSourceConfiguration $sourceConfiguration
 */
class SharePointDataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     crawlerConfiguration?: SharePointCrawlerConfiguration,
     *     sourceConfiguration: SharePointSourceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
