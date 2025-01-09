<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetOpportunity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Catalog
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property Shapes\Customer $Customer
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property Shapes\LifeCycle $LifeCycle
 * @property Shapes\Marketing $Marketing
 * @property 'Yes'|'No' $NationalSecurity
 * @property list<Shapes\Contact> $OpportunityTeam
 * @property 'Net New Business'|'Flat Renewal'|'Expansion' $OpportunityType
 * @property string $PartnerOpportunityIdentifier
 * @property list<'Co-Sell - Architectural Validation'|'Co-Sell - Business Presentation'|'Co-Sell - Competitive Information'|'Co-Sell - Pricing Assistance'|'Co-Sell - Technical Consultation'|'Co-Sell - Total Cost of Ownership Evaluation'|'Co-Sell - Deal Support'|'Co-Sell - Support for Public Tender / RFx'> $PrimaryNeedsFromAws
 * @property Shapes\Project $Project
 * @property Shapes\RelatedEntityIdentifiers $RelatedEntityIdentifiers
 * @property Shapes\SoftwareRevenue $SoftwareRevenue
 */
class GetOpportunityResponse extends Response
{
}
