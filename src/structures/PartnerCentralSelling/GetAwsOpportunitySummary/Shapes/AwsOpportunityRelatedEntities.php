<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AwsProducts
 * @property list<string>|null $Solutions
 */
class AwsOpportunityRelatedEntities extends Shape
{
    /**
     * @param array{
     *     AwsProducts?: list<string>|null,
     *     Solutions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
