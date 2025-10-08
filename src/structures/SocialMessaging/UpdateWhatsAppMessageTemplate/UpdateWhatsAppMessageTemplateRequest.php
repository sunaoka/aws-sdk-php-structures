<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\UpdateWhatsAppMessageTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $metaTemplateId
 * @property string|null $templateCategory
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $templateComponents
 */
class UpdateWhatsAppMessageTemplateRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     metaTemplateId: string,
     *     templateCategory?: string|null,
     *     templateComponents?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
