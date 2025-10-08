<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\CreateWhatsAppMessageTemplateFromLibrary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\MetaLibraryTemplate $metaLibraryTemplate
 * @property string $id
 */
class CreateWhatsAppMessageTemplateFromLibraryRequest extends Request
{
    /**
     * @param array{
     *     metaLibraryTemplate: Shapes\MetaLibraryTemplate,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
