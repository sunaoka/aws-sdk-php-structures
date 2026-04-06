<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $ResourceGroupName
 * @property string|null $LifeCycle
 * @property string|null $OpsItemSNSTopicArn
 * @property string|null $SNSNotificationArn
 * @property bool|null $OpsCenterEnabled
 * @property bool|null $CWEMonitorEnabled
 * @property string|null $Remarks
 * @property bool|null $AutoConfigEnabled
 * @property 'RESOURCE_GROUP_BASED'|'ACCOUNT_BASED'|null $DiscoveryType
 * @property bool|null $AttachMissingPermission
 */
class ApplicationInfo extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     ResourceGroupName?: string|null,
     *     LifeCycle?: string|null,
     *     OpsItemSNSTopicArn?: string|null,
     *     SNSNotificationArn?: string|null,
     *     OpsCenterEnabled?: bool|null,
     *     CWEMonitorEnabled?: bool|null,
     *     Remarks?: string|null,
     *     AutoConfigEnabled?: bool|null,
     *     DiscoveryType?: 'RESOURCE_GROUP_BASED'|'ACCOUNT_BASED'|null,
     *     AttachMissingPermission?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
