<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property bool|null $OpsCenterEnabled
 * @property bool|null $CWEMonitorEnabled
 * @property string|null $OpsItemSNSTopicArn
 * @property string|null $SNSNotificationArn
 * @property bool|null $RemoveSNSTopic
 * @property bool|null $AutoConfigEnabled
 * @property bool|null $AttachMissingPermission
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     OpsCenterEnabled?: bool|null,
     *     CWEMonitorEnabled?: bool|null,
     *     OpsItemSNSTopicArn?: string|null,
     *     SNSNotificationArn?: string|null,
     *     RemoveSNSTopic?: bool|null,
     *     AutoConfigEnabled?: bool|null,
     *     AttachMissingPermission?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
