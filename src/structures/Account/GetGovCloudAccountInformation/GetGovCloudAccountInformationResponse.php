<?php

namespace Sunaoka\Aws\Structures\Account\GetGovCloudAccountInformation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GovCloudAccountId
 * @property 'PENDING_ACTIVATION'|'ACTIVE'|'SUSPENDED'|'CLOSED' $AccountState
 */
class GetGovCloudAccountInformationResponse extends Response
{
}
