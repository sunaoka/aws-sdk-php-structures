<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\DeleteWhatsAppMessageTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $metaTemplateId
 * @property bool|null $deleteAllLanguages
 * @property string $id
 * @property string $templateName
 */
class DeleteWhatsAppMessageTemplateRequest extends Request
{
    /**
     * @param array{
     *     metaTemplateId?: string|null,
     *     deleteAllLanguages?: bool|null,
     *     id: string,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
