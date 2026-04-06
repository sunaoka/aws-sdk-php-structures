<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetAutoManagementConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ACCOUNT'|null $OptInLevel
 * @property 'NotifyOnly'|'NotifyAndAdjust'|null $OptInType
 * @property string|null $NotificationArn
 * @property 'ENABLED'|'DISABLED'|null $OptInStatus
 * @property array<string, list<Shapes\QuotaInfo>>|null $ExclusionList
 */
class GetAutoManagementConfigurationResponse extends Response
{
}
