<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchCustomerAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEnrichmentCustomerSummary|null $Customer
 * @property AwsEnrichmentInsightsSummary|null $Insights
 */
class AwsEnrichmentSummary extends Shape
{
    /**
     * @param array{
     *     Customer?: AwsEnrichmentCustomerSummary|null,
     *     Insights?: AwsEnrichmentInsightsSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
