<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetOpportunity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Catalog
 * @property list<'Co-Sell - Architectural Validation'|'Co-Sell - Business Presentation'|'Co-Sell - Competitive Information'|'Co-Sell - Pricing Assistance'|'Co-Sell - Technical Consultation'|'Co-Sell - Total Cost of Ownership Evaluation'|'Co-Sell - Deal Support'|'Co-Sell - Support for Public Tender / RFx'>|null $PrimaryNeedsFromAws
 * @property 'Yes'|'No'|null $NationalSecurity
 * @property string|null $PartnerOpportunityIdentifier
 * @property Shapes\Customer|null $Customer
 * @property Shapes\Project|null $Project
 * @property 'Net New Business'|'Flat Renewal'|'Expansion'|null $OpportunityType
 * @property Shapes\Marketing|null $Marketing
 * @property Shapes\SoftwareRevenue|null $SoftwareRevenue
 * @property string $Id
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property Shapes\RelatedEntityIdentifiers $RelatedEntityIdentifiers
 * @property Shapes\LifeCycle|null $LifeCycle
 * @property list<Shapes\Contact>|null $OpportunityTeam
 */
class GetOpportunityResponse extends Response
{
}
