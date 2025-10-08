<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\CreateWhatsAppMessageTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $templateDefinition
 * @property string $id
 */
class CreateWhatsAppMessageTemplateRequest extends Request
{
    /**
     * @param array{
     *     templateDefinition: string|resource|\Psr\Http\Message\StreamInterface,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
