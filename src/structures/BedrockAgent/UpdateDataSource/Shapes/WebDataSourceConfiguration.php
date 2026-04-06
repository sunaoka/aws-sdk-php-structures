<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WebSourceConfiguration $sourceConfiguration
 * @property WebCrawlerConfiguration|null $crawlerConfiguration
 */
class WebDataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     sourceConfiguration: WebSourceConfiguration,
     *     crawlerConfiguration?: WebCrawlerConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
