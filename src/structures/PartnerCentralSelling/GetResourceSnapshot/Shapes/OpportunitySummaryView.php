<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Customer|null $Customer
 * @property LifeCycleForView|null $Lifecycle
 * @property list<Contact>|null $OpportunityTeam
 * @property 'Net New Business'|'Flat Renewal'|'Expansion'|null $OpportunityType
 * @property list<'Co-Sell - Architectural Validation'|'Co-Sell - Business Presentation'|'Co-Sell - Competitive Information'|'Co-Sell - Pricing Assistance'|'Co-Sell - Technical Consultation'|'Co-Sell - Total Cost of Ownership Evaluation'|'Co-Sell - Deal Support'|'Co-Sell - Support for Public Tender / RFx'>|null $PrimaryNeedsFromAws
 * @property ProjectView|null $Project
 * @property RelatedEntityIdentifiers|null $RelatedEntityIdentifiers
 */
class OpportunitySummaryView extends Shape
{
    /**
     * @param array{
     *     Customer?: Customer|null,
     *     Lifecycle?: LifeCycleForView|null,
     *     OpportunityTeam?: list<Contact>|null,
     *     OpportunityType?: 'Net New Business'|'Flat Renewal'|'Expansion'|null,
     *     PrimaryNeedsFromAws?: list<'Co-Sell - Architectural Validation'|'Co-Sell - Business Presentation'|'Co-Sell - Competitive Information'|'Co-Sell - Pricing Assistance'|'Co-Sell - Technical Consultation'|'Co-Sell - Total Cost of Ownership Evaluation'|'Co-Sell - Deal Support'|'Co-Sell - Support for Public Tender / RFx'>|null,
     *     Project?: ProjectView|null,
     *     RelatedEntityIdentifiers?: RelatedEntityIdentifiers|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
