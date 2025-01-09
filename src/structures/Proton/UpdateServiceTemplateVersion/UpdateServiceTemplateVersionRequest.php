<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateServiceTemplateVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\CompatibleEnvironmentTemplateInput> $compatibleEnvironmentTemplates
 * @property string $description
 * @property string $majorVersion
 * @property string $minorVersion
 * @property 'REGISTRATION_IN_PROGRESS'|'REGISTRATION_FAILED'|'DRAFT'|'PUBLISHED' $status
 * @property list<'DIRECTLY_DEFINED'> $supportedComponentSources
 * @property string $templateName
 */
class UpdateServiceTemplateVersionRequest extends Request
{
    /**
     * @param array{
     *     compatibleEnvironmentTemplates?: list<Shapes\CompatibleEnvironmentTemplateInput>,
     *     description?: string,
     *     majorVersion: string,
     *     minorVersion: string,
     *     status?: 'REGISTRATION_IN_PROGRESS'|'REGISTRATION_FAILED'|'DRAFT'|'PUBLISHED',
     *     supportedComponentSources?: list<'DIRECTLY_DEFINED'>,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
