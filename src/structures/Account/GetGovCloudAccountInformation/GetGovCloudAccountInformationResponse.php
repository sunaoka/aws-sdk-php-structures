<?php

namespace Sunaoka\Aws\Structures\Account\GetGovCloudAccountInformation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PENDING_ACTIVATION'|'ACTIVE'|'SUSPENDED'|'CLOSED' $AccountState
 * @property string $GovCloudAccountId
 */
class GetGovCloudAccountInformationResponse extends Response
{
}
