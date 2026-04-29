<?php

namespace Sunaoka\Aws\Structures\Account\GetAccountInformation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AccountId
 * @property string|null $AccountName
 * @property \Aws\Api\DateTimeResult|null $AccountCreatedDate
 * @property 'PENDING_ACTIVATION'|'ACTIVE'|'SUSPENDED'|'CLOSED'|null $AccountState
 */
class GetAccountInformationResponse extends Response
{
}
