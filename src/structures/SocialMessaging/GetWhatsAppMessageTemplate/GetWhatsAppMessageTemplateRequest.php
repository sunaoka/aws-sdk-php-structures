<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppMessageTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $metaTemplateId
 * @property string $id
 * @property string|null $templateName
 * @property string|null $templateLanguageCode
 */
class GetWhatsAppMessageTemplateRequest extends Request
{
    /**
     * @param array{
     *     metaTemplateId?: string|null,
     *     id: string,
     *     templateName?: string|null,
     *     templateLanguageCode?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
