<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetCustomerAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEnrichmentCustomer|null $Customer
 * @property AwsEnrichmentInsights|null $Insights
 */
class AwsEnrichment extends Shape
{
    /**
     * @param array{
     *     Customer?: AwsEnrichmentCustomer|null,
     *     Insights?: AwsEnrichmentInsights|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
