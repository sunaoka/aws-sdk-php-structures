<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateServiceTemplateVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\CompatibleEnvironmentTemplateInput>|null $compatibleEnvironmentTemplates
 * @property string|null $description
 * @property string $majorVersion
 * @property string $minorVersion
 * @property 'REGISTRATION_IN_PROGRESS'|'REGISTRATION_FAILED'|'DRAFT'|'PUBLISHED'|null $status
 * @property list<'DIRECTLY_DEFINED'>|null $supportedComponentSources
 * @property string $templateName
 */
class UpdateServiceTemplateVersionRequest extends Request
{
    /**
     * @param array{
     *     compatibleEnvironmentTemplates?: list<Shapes\CompatibleEnvironmentTemplateInput>|null,
     *     description?: string|null,
     *     majorVersion: string,
     *     minorVersion: string,
     *     status?: 'REGISTRATION_IN_PROGRESS'|'REGISTRATION_FAILED'|'DRAFT'|'PUBLISHED'|null,
     *     supportedComponentSources?: list<'DIRECTLY_DEFINED'>|null,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
