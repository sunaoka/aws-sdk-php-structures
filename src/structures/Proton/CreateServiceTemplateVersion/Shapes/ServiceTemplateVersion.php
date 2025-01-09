<?php

namespace Sunaoka\Aws\Structures\Proton\CreateServiceTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property list<CompatibleEnvironmentTemplate> $compatibleEnvironmentTemplates
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property string $majorVersion
 * @property string $minorVersion
 * @property string $recommendedMinorVersion
 * @property string $schema
 * @property 'REGISTRATION_IN_PROGRESS'|'REGISTRATION_FAILED'|'DRAFT'|'PUBLISHED' $status
 * @property string $statusMessage
 * @property list<'DIRECTLY_DEFINED'> $supportedComponentSources
 * @property string $templateName
 */
class ServiceTemplateVersion extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     compatibleEnvironmentTemplates: list<CompatibleEnvironmentTemplate>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     lastModifiedAt: \Aws\Api\DateTimeResult,
     *     majorVersion: string,
     *     minorVersion: string,
     *     recommendedMinorVersion?: string,
     *     schema?: string,
     *     status: 'REGISTRATION_IN_PROGRESS'|'REGISTRATION_FAILED'|'DRAFT'|'PUBLISHED',
     *     statusMessage?: string,
     *     supportedComponentSources?: list<'DIRECTLY_DEFINED'>,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
