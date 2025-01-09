<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property bool $OpsCenterEnabled
 * @property bool $CWEMonitorEnabled
 * @property string $OpsItemSNSTopicArn
 * @property string $SNSNotificationArn
 * @property bool $RemoveSNSTopic
 * @property bool $AutoConfigEnabled
 * @property bool $AttachMissingPermission
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     OpsCenterEnabled?: bool,
     *     CWEMonitorEnabled?: bool,
     *     OpsItemSNSTopicArn?: string,
     *     SNSNotificationArn?: string,
     *     RemoveSNSTopic?: bool,
     *     AutoConfigEnabled?: bool,
     *     AttachMissingPermission?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
