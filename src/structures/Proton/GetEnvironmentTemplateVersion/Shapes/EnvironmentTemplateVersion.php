<?php

namespace Sunaoka\Aws\Structures\Proton\GetEnvironmentTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property string $majorVersion
 * @property string $minorVersion
 * @property string $recommendedMinorVersion
 * @property string $schema
 * @property 'REGISTRATION_IN_PROGRESS'|'REGISTRATION_FAILED'|'DRAFT'|'PUBLISHED' $status
 * @property string $statusMessage
 * @property string $templateName
 */
class EnvironmentTemplateVersion extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     lastModifiedAt: \Aws\Api\DateTimeResult,
     *     majorVersion: string,
     *     minorVersion: string,
     *     recommendedMinorVersion?: string,
     *     schema?: string,
     *     status: 'REGISTRATION_IN_PROGRESS'|'REGISTRATION_FAILED'|'DRAFT'|'PUBLISHED',
     *     statusMessage?: string,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
