<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdatePushTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $CreateNewVersion
 * @property Shapes\PushNotificationTemplateRequest $PushNotificationTemplateRequest
 * @property string $TemplateName
 * @property string $Version
 */
class UpdatePushTemplateRequest extends Request
{
    /**
     * @param array{
     *     CreateNewVersion?: bool,
     *     PushNotificationTemplateRequest: Shapes\PushNotificationTemplateRequest,
     *     TemplateName: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
