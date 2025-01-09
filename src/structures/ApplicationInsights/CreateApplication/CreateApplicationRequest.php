<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property bool $OpsCenterEnabled
 * @property bool $CWEMonitorEnabled
 * @property string $OpsItemSNSTopicArn
 * @property string $SNSNotificationArn
 * @property list<Shapes\Tag> $Tags
 * @property bool $AutoConfigEnabled
 * @property bool $AutoCreate
 * @property 'ACCOUNT_BASED' $GroupingType
 * @property bool $AttachMissingPermission
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName?: string,
     *     OpsCenterEnabled?: bool,
     *     CWEMonitorEnabled?: bool,
     *     OpsItemSNSTopicArn?: string,
     *     SNSNotificationArn?: string,
     *     Tags?: list<Shapes\Tag>,
     *     AutoConfigEnabled?: bool,
     *     AutoCreate?: bool,
     *     GroupingType?: 'ACCOUNT_BASED',
     *     AttachMissingPermission?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
