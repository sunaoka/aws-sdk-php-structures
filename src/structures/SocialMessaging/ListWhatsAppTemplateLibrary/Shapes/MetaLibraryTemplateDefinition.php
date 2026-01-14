<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\ListWhatsAppTemplateLibrary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $templateName
 * @property string|null $templateLanguage
 * @property string|null $templateCategory
 * @property string|null $templateTopic
 * @property string|null $templateUseCase
 * @property list<string>|null $templateIndustry
 * @property string|null $templateHeader
 * @property string|null $templateBody
 * @property list<LibraryTemplateButtonList>|null $templateButtons
 * @property string|null $templateId
 * @property list<string>|null $templateBodyExampleParams
 */
class MetaLibraryTemplateDefinition extends Shape
{
    /**
     * @param array{
     *     templateName?: string|null,
     *     templateLanguage?: string|null,
     *     templateCategory?: string|null,
     *     templateTopic?: string|null,
     *     templateUseCase?: string|null,
     *     templateIndustry?: list<string>|null,
     *     templateHeader?: string|null,
     *     templateBody?: string|null,
     *     templateButtons?: list<LibraryTemplateButtonList>|null,
     *     templateId?: string|null,
     *     templateBodyExampleParams?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
