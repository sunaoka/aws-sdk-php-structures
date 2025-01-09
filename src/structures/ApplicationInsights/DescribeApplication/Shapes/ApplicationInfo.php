<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $ResourceGroupName
 * @property string $LifeCycle
 * @property string $OpsItemSNSTopicArn
 * @property string $SNSNotificationArn
 * @property bool $OpsCenterEnabled
 * @property bool $CWEMonitorEnabled
 * @property string $Remarks
 * @property bool $AutoConfigEnabled
 * @property 'RESOURCE_GROUP_BASED'|'ACCOUNT_BASED' $DiscoveryType
 * @property bool $AttachMissingPermission
 */
class ApplicationInfo extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     ResourceGroupName?: string,
     *     LifeCycle?: string,
     *     OpsItemSNSTopicArn?: string,
     *     SNSNotificationArn?: string,
     *     OpsCenterEnabled?: bool,
     *     CWEMonitorEnabled?: bool,
     *     Remarks?: string,
     *     AutoConfigEnabled?: bool,
     *     DiscoveryType?: 'RESOURCE_GROUP_BASED'|'ACCOUNT_BASED',
     *     AttachMissingPermission?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
