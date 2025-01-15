<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SalesforceCrawlerConfiguration|null $crawlerConfiguration
 * @property SalesforceSourceConfiguration $sourceConfiguration
 */
class SalesforceDataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     crawlerConfiguration?: SalesforceCrawlerConfiguration|null,
     *     sourceConfiguration: SalesforceSourceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
