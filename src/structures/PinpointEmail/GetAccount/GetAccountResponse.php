<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetAccount;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\SendQuota|null $SendQuota
 * @property bool|null $SendingEnabled
 * @property bool|null $DedicatedIpAutoWarmupEnabled
 * @property string|null $EnforcementStatus
 * @property bool|null $ProductionAccessEnabled
 */
class GetAccountResponse extends Response
{
}
