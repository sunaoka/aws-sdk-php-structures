<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdatePushTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $CreateNewVersion
 * @property Shapes\PushNotificationTemplateRequest $PushNotificationTemplateRequest
 * @property string $TemplateName
 * @property string|null $Version
 */
class UpdatePushTemplateRequest extends Request
{
    /**
     * @param array{
     *     CreateNewVersion?: bool|null,
     *     PushNotificationTemplateRequest: Shapes\PushNotificationTemplateRequest,
     *     TemplateName: string,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
