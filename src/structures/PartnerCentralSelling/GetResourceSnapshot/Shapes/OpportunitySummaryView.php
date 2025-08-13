<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Net New Business'|'Flat Renewal'|'Expansion'|null $OpportunityType
 * @property LifeCycleForView|null $Lifecycle
 * @property list<Contact>|null $OpportunityTeam
 * @property list<'Co-Sell - Architectural Validation'|'Co-Sell - Business Presentation'|'Co-Sell - Competitive Information'|'Co-Sell - Pricing Assistance'|'Co-Sell - Technical Consultation'|'Co-Sell - Total Cost of Ownership Evaluation'|'Co-Sell - Deal Support'|'Co-Sell - Support for Public Tender / RFx'>|null $PrimaryNeedsFromAws
 * @property Customer|null $Customer
 * @property ProjectView|null $Project
 * @property RelatedEntityIdentifiers|null $RelatedEntityIdentifiers
 */
class OpportunitySummaryView extends Shape
{
    /**
     * @param array{
     *     OpportunityType?: 'Net New Business'|'Flat Renewal'|'Expansion'|null,
     *     Lifecycle?: LifeCycleForView|null,
     *     OpportunityTeam?: list<Contact>|null,
     *     PrimaryNeedsFromAws?: list<'Co-Sell - Architectural Validation'|'Co-Sell - Business Presentation'|'Co-Sell - Competitive Information'|'Co-Sell - Pricing Assistance'|'Co-Sell - Technical Consultation'|'Co-Sell - Total Cost of Ownership Evaluation'|'Co-Sell - Deal Support'|'Co-Sell - Support for Public Tender / RFx'>|null,
     *     Customer?: Customer|null,
     *     Project?: ProjectView|null,
     *     RelatedEntityIdentifiers?: RelatedEntityIdentifiers|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
