<?php

namespace Sunaoka\Aws\Structures\SesV2\GetAccount;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $DedicatedIpAutoWarmupEnabled
 * @property string|null $EnforcementStatus
 * @property bool|null $ProductionAccessEnabled
 * @property Shapes\SendQuota|null $SendQuota
 * @property bool|null $SendingEnabled
 * @property Shapes\SuppressionAttributes|null $SuppressionAttributes
 * @property Shapes\AccountDetails|null $Details
 * @property Shapes\VdmAttributes|null $VdmAttributes
 */
class GetAccountResponse extends Response
{
}
