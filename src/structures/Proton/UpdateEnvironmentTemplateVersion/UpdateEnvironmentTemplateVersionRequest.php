<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateEnvironmentTemplateVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $majorVersion
 * @property string $minorVersion
 * @property 'REGISTRATION_IN_PROGRESS'|'REGISTRATION_FAILED'|'DRAFT'|'PUBLISHED' $status
 * @property string $templateName
 */
class UpdateEnvironmentTemplateVersionRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     majorVersion: string,
     *     minorVersion: string,
     *     status?: 'REGISTRATION_IN_PROGRESS'|'REGISTRATION_FAILED'|'DRAFT'|'PUBLISHED',
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
