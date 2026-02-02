<?php

namespace Sunaoka\Aws\Structures\Wickr\GetNetwork;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $networkId
 * @property string $networkName
 * @property 'STANDARD'|'PREMIUM' $accessLevel
 * @property string $awsAccountId
 * @property string $networkArn
 * @property int|null $standing
 * @property string|null $freeTrialExpiration
 * @property int|null $migrationState
 * @property string|null $encryptionKeyArn
 */
class GetNetworkResponse extends Response
{
}
