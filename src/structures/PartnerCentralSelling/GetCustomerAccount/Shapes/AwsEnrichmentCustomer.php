<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetCustomerAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountName
 * @property string|null $Industry
 * @property string|null $SubIndustry
 * @property string|null $Sector
 * @property string|null $Segment
 * @property string|null $CompanySize
 * @property string|null $Region
 * @property string|null $SubRegion
 * @property string|null $Geo
 * @property string|null $Country
 * @property string|null $CustomerAccountPlanningQualification
 * @property list<string>|null $EligiblePrograms
 */
class AwsEnrichmentCustomer extends Shape
{
    /**
     * @param array{
     *     AccountName?: string|null,
     *     Industry?: string|null,
     *     SubIndustry?: string|null,
     *     Sector?: string|null,
     *     Segment?: string|null,
     *     CompanySize?: string|null,
     *     Region?: string|null,
     *     SubRegion?: string|null,
     *     Geo?: string|null,
     *     Country?: string|null,
     *     CustomerAccountPlanningQualification?: string|null,
     *     EligiblePrograms?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
