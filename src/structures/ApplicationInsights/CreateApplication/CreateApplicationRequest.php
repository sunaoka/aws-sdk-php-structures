<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ResourceGroupName
 * @property bool|null $OpsCenterEnabled
 * @property bool|null $CWEMonitorEnabled
 * @property string|null $OpsItemSNSTopicArn
 * @property string|null $SNSNotificationArn
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $AutoConfigEnabled
 * @property bool|null $AutoCreate
 * @property 'ACCOUNT_BASED'|null $GroupingType
 * @property bool|null $AttachMissingPermission
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName?: string|null,
     *     OpsCenterEnabled?: bool|null,
     *     CWEMonitorEnabled?: bool|null,
     *     OpsItemSNSTopicArn?: string|null,
     *     SNSNotificationArn?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     AutoConfigEnabled?: bool|null,
     *     AutoCreate?: bool|null,
     *     GroupingType?: 'ACCOUNT_BASED'|null,
     *     AttachMissingPermission?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
