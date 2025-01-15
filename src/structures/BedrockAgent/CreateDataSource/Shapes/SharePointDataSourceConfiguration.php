<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SharePointCrawlerConfiguration|null $crawlerConfiguration
 * @property SharePointSourceConfiguration $sourceConfiguration
 */
class SharePointDataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     crawlerConfiguration?: SharePointCrawlerConfiguration|null,
     *     sourceConfiguration: SharePointSourceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
