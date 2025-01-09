<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WebCrawlerConfiguration $crawlerConfiguration
 * @property WebSourceConfiguration $sourceConfiguration
 */
class WebDataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     crawlerConfiguration?: WebCrawlerConfiguration,
     *     sourceConfiguration: WebSourceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
