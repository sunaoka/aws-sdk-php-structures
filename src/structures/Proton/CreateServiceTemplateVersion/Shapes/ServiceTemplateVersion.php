<?php

namespace Sunaoka\Aws\Structures\Proton\CreateServiceTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property list<CompatibleEnvironmentTemplate> $compatibleEnvironmentTemplates
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property string $majorVersion
 * @property string $minorVersion
 * @property string|null $recommendedMinorVersion
 * @property string|null $schema
 * @property 'REGISTRATION_IN_PROGRESS'|'REGISTRATION_FAILED'|'DRAFT'|'PUBLISHED' $status
 * @property string|null $statusMessage
 * @property list<'DIRECTLY_DEFINED'>|null $supportedComponentSources
 * @property string $templateName
 */
class ServiceTemplateVersion extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     compatibleEnvironmentTemplates: list<CompatibleEnvironmentTemplate>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     lastModifiedAt: \Aws\Api\DateTimeResult,
     *     majorVersion: string,
     *     minorVersion: string,
     *     recommendedMinorVersion?: string|null,
     *     schema?: string|null,
     *     status: 'REGISTRATION_IN_PROGRESS'|'REGISTRATION_FAILED'|'DRAFT'|'PUBLISHED',
     *     statusMessage?: string|null,
     *     supportedComponentSources?: list<'DIRECTLY_DEFINED'>|null,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
