<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Customer $Customer
 * @property LifeCycleForView $Lifecycle
 * @property list<Contact> $OpportunityTeam
 * @property 'Net New Business'|'Flat Renewal'|'Expansion' $OpportunityType
 * @property list<'Co-Sell - Architectural Validation'|'Co-Sell - Business Presentation'|'Co-Sell - Competitive Information'|'Co-Sell - Pricing Assistance'|'Co-Sell - Technical Consultation'|'Co-Sell - Total Cost of Ownership Evaluation'|'Co-Sell - Deal Support'|'Co-Sell - Support for Public Tender / RFx'> $PrimaryNeedsFromAws
 * @property ProjectView $Project
 * @property RelatedEntityIdentifiers $RelatedEntityIdentifiers
 */
class OpportunitySummaryView extends Shape
{
    /**
     * @param array{
     *     Customer?: Customer,
     *     Lifecycle?: LifeCycleForView,
     *     OpportunityTeam?: list<Contact>,
     *     OpportunityType?: 'Net New Business'|'Flat Renewal'|'Expansion',
     *     PrimaryNeedsFromAws?: list<'Co-Sell - Architectural Validation'|'Co-Sell - Business Presentation'|'Co-Sell - Competitive Information'|'Co-Sell - Pricing Assistance'|'Co-Sell - Technical Consultation'|'Co-Sell - Total Cost of Ownership Evaluation'|'Co-Sell - Deal Support'|'Co-Sell - Support for Public Tender / RFx'>,
     *     Project?: ProjectView,
     *     RelatedEntityIdentifiers?: RelatedEntityIdentifiers
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
