<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Catalog
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property CustomerSummary $Customer
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property LifeCycleSummary $LifeCycle
 * @property 'Net New Business'|'Flat Renewal'|'Expansion' $OpportunityType
 * @property string $PartnerOpportunityIdentifier
 * @property ProjectSummary $Project
 */
class OpportunitySummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Catalog: string,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     Customer?: CustomerSummary,
     *     Id?: string,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     LifeCycle?: LifeCycleSummary,
     *     OpportunityType?: 'Net New Business'|'Flat Renewal'|'Expansion',
     *     PartnerOpportunityIdentifier?: string,
     *     Project?: ProjectSummary
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
