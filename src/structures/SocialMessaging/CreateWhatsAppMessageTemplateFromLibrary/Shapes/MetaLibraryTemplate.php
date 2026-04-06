<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\CreateWhatsAppMessageTemplateFromLibrary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $templateName
 * @property string $libraryTemplateName
 * @property string $templateCategory
 * @property string $templateLanguage
 * @property list<LibraryTemplateButtonInput>|null $libraryTemplateButtonInputs
 * @property LibraryTemplateBodyInputs|null $libraryTemplateBodyInputs
 */
class MetaLibraryTemplate extends Shape
{
    /**
     * @param array{
     *     templateName: string,
     *     libraryTemplateName: string,
     *     templateCategory: string,
     *     templateLanguage: string,
     *     libraryTemplateButtonInputs?: list<LibraryTemplateButtonInput>|null,
     *     libraryTemplateBodyInputs?: LibraryTemplateBodyInputs|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
