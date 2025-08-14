<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Catalog
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $PartnerOpportunityIdentifier
 * @property 'Net New Business'|'Flat Renewal'|'Expansion'|null $OpportunityType
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property LifeCycleSummary|null $LifeCycle
 * @property CustomerSummary|null $Customer
 * @property ProjectSummary|null $Project
 */
class OpportunitySummary extends Shape
{
    /**
     * @param array{
     *     Catalog: string,
     *     Id?: string|null,
     *     Arn?: string|null,
     *     PartnerOpportunityIdentifier?: string|null,
     *     OpportunityType?: 'Net New Business'|'Flat Renewal'|'Expansion'|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     LifeCycle?: LifeCycleSummary|null,
     *     Customer?: CustomerSummary|null,
     *     Project?: ProjectSummary|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
