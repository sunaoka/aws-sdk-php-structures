<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsProductInsights|null $Partner
 * @property AwsProductInsights|null $AWS
 */
class AwsProductsSpendInsightsBySource extends Shape
{
    /**
     * @param array{
     *     Partner?: AwsProductInsights|null,
     *     AWS?: AwsProductInsights|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
