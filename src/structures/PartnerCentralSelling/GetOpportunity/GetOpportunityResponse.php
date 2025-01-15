<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetOpportunity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string $Catalog
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property Shapes\Customer|null $Customer
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property Shapes\LifeCycle|null $LifeCycle
 * @property Shapes\Marketing|null $Marketing
 * @property 'Yes'|'No'|null $NationalSecurity
 * @property list<Shapes\Contact>|null $OpportunityTeam
 * @property 'Net New Business'|'Flat Renewal'|'Expansion'|null $OpportunityType
 * @property string|null $PartnerOpportunityIdentifier
 * @property list<'Co-Sell - Architectural Validation'|'Co-Sell - Business Presentation'|'Co-Sell - Competitive Information'|'Co-Sell - Pricing Assistance'|'Co-Sell - Technical Consultation'|'Co-Sell - Total Cost of Ownership Evaluation'|'Co-Sell - Deal Support'|'Co-Sell - Support for Public Tender / RFx'>|null $PrimaryNeedsFromAws
 * @property Shapes\Project|null $Project
 * @property Shapes\RelatedEntityIdentifiers $RelatedEntityIdentifiers
 * @property Shapes\SoftwareRevenue|null $SoftwareRevenue
 */
class GetOpportunityResponse extends Response
{
}
