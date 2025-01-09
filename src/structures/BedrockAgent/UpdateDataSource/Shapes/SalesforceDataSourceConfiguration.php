<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SalesforceCrawlerConfiguration $crawlerConfiguration
 * @property SalesforceSourceConfiguration $sourceConfiguration
 */
class SalesforceDataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     crawlerConfiguration?: SalesforceCrawlerConfiguration,
     *     sourceConfiguration: SalesforceSourceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
