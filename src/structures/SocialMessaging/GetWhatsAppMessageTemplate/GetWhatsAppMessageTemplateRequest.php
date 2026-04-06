<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppMessageTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metaTemplateId
 * @property string $id
 */
class GetWhatsAppMessageTemplateRequest extends Request
{
    /**
     * @param array{
     *     metaTemplateId: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
