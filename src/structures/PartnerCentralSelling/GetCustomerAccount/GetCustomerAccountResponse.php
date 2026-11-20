<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetCustomerAccount;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Catalog
 * @property 'PENDING'|'ENRICHED'|'NO_MATCH_FOUND'|'ACTION_REQUIRED' $EnrichmentStatus
 * @property string|null $PartnerAccountIdentifier
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property list<Shapes\Issue>|null $Issues
 * @property Shapes\AwsEnrichment|null $AwsEnrichment
 * @property 'DUPLICATE_CUSTOMER_MATCH'|'PROCESSING_ERROR'|null $ReasonCode
 * @property string|null $Message
 * @property string|null $ExistingCustomerAccountArn
 * @property Shapes\CustomerAccountData $Account
 * @property list<Shapes\Tag>|null $Tags
 */
class GetCustomerAccountResponse extends Response
{
}
