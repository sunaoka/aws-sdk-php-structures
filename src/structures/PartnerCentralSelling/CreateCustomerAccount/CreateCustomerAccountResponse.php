<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateCustomerAccount;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Id
 * @property 'PENDING'|'ENRICHED'|'NO_MATCH_FOUND'|'ACTION_REQUIRED' $Status
 * @property string $Catalog
 * @property string|null $PartnerAccountIdentifier
 * @property \Aws\Api\DateTimeResult $CreatedDate
 */
class CreateCustomerAccountResponse extends Response
{
}
