<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SalesforceSourceConfiguration $sourceConfiguration
 * @property SalesforceCrawlerConfiguration|null $crawlerConfiguration
 */
class SalesforceDataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     sourceConfiguration: SalesforceSourceConfiguration,
     *     crawlerConfiguration?: SalesforceCrawlerConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
