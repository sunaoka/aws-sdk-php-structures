<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreatePushTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PushNotificationTemplateRequest $PushNotificationTemplateRequest
 * @property string $TemplateName
 */
class CreatePushTemplateRequest extends Request
{
    /**
     * @param array{
     *     PushNotificationTemplateRequest: Shapes\PushNotificationTemplateRequest,
     *     TemplateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
