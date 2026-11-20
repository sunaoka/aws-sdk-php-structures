<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchCustomerAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Industry
 * @property string|null $AccountPlanningQualification
 * @property list<string>|null $EligiblePrograms
 * @property string|null $Geo
 * @property string|null $Country
 * @property string|null $Segment
 */
class AwsEnrichmentCustomerSummary extends Shape
{
    /**
     * @param array{
     *     Industry?: string|null,
     *     AccountPlanningQualification?: string|null,
     *     EligiblePrograms?: list<string>|null,
     *     Geo?: string|null,
     *     Country?: string|null,
     *     Segment?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
