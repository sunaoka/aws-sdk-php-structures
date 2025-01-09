<?php

namespace Sunaoka\Aws\Structures\Proton\CreateServiceTemplateVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property list<Shapes\CompatibleEnvironmentTemplateInput> $compatibleEnvironmentTemplates
 * @property string $description
 * @property string $majorVersion
 * @property Shapes\TemplateVersionSourceInput $source
 * @property list<'DIRECTLY_DEFINED'> $supportedComponentSources
 * @property list<Shapes\Tag> $tags
 * @property string $templateName
 */
class CreateServiceTemplateVersionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     compatibleEnvironmentTemplates: list<Shapes\CompatibleEnvironmentTemplateInput>,
     *     description?: string,
     *     majorVersion?: string,
     *     source: Shapes\TemplateVersionSourceInput,
     *     supportedComponentSources?: list<'DIRECTLY_DEFINED'>,
     *     tags?: list<Shapes\Tag>,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
