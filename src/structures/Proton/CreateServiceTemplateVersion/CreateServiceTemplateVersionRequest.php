<?php

namespace Sunaoka\Aws\Structures\Proton\CreateServiceTemplateVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property list<Shapes\CompatibleEnvironmentTemplateInput> $compatibleEnvironmentTemplates
 * @property string|null $description
 * @property string|null $majorVersion
 * @property Shapes\TemplateVersionSourceInput $source
 * @property list<'DIRECTLY_DEFINED'>|null $supportedComponentSources
 * @property list<Shapes\Tag>|null $tags
 * @property string $templateName
 */
class CreateServiceTemplateVersionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     compatibleEnvironmentTemplates: list<Shapes\CompatibleEnvironmentTemplateInput>,
     *     description?: string|null,
     *     majorVersion?: string|null,
     *     source: Shapes\TemplateVersionSourceInput,
     *     supportedComponentSources?: list<'DIRECTLY_DEFINED'>|null,
     *     tags?: list<Shapes\Tag>|null,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
