<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateCustomerAccount;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Id
 * @property 'PENDING'|'ENRICHED'|'NO_MATCH_FOUND'|'ACTION_REQUIRED' $Status
 * @property string $Catalog
 * @property string|null $PartnerAccountIdentifier
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 */
class UpdateCustomerAccountResponse extends Response
{
}
