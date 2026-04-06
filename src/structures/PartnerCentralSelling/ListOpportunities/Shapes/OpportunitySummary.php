<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string $Catalog
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property CustomerSummary|null $Customer
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property LifeCycleSummary|null $LifeCycle
 * @property 'Net New Business'|'Flat Renewal'|'Expansion'|null $OpportunityType
 * @property string|null $PartnerOpportunityIdentifier
 * @property ProjectSummary|null $Project
 */
class OpportunitySummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Catalog: string,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     Customer?: CustomerSummary|null,
     *     Id?: string|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     LifeCycle?: LifeCycleSummary|null,
     *     OpportunityType?: 'Net New Business'|'Flat Renewal'|'Expansion'|null,
     *     PartnerOpportunityIdentifier?: string|null,
     *     Project?: ProjectSummary|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
