<?php

namespace Sunaoka\Aws\Structures\Proton\ListEnvironmentTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property string $majorVersion
 * @property string $minorVersion
 * @property string|null $recommendedMinorVersion
 * @property 'REGISTRATION_IN_PROGRESS'|'REGISTRATION_FAILED'|'DRAFT'|'PUBLISHED' $status
 * @property string|null $statusMessage
 * @property string $templateName
 */
class EnvironmentTemplateVersionSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     lastModifiedAt: \Aws\Api\DateTimeResult,
     *     majorVersion: string,
     *     minorVersion: string,
     *     recommendedMinorVersion?: string|null,
     *     status: 'REGISTRATION_IN_PROGRESS'|'REGISTRATION_FAILED'|'DRAFT'|'PUBLISHED',
     *     statusMessage?: string|null,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
