<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AwsProducts
 * @property list<string> $Solutions
 */
class AwsOpportunityRelatedEntities extends Shape
{
    /**
     * @param array{
     *     AwsProducts?: list<string>,
     *     Solutions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
