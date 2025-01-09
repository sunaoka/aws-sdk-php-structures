<?php

namespace Sunaoka\Aws\Structures\SesV2\GetAccount;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $DedicatedIpAutoWarmupEnabled
 * @property string $EnforcementStatus
 * @property bool $ProductionAccessEnabled
 * @property Shapes\SendQuota $SendQuota
 * @property bool $SendingEnabled
 * @property Shapes\SuppressionAttributes $SuppressionAttributes
 * @property Shapes\AccountDetails $Details
 * @property Shapes\VdmAttributes $VdmAttributes
 */
class GetAccountResponse extends Response
{
}
