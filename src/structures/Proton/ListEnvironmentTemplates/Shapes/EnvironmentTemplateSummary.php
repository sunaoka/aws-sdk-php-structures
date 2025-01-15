<?php

namespace Sunaoka\Aws\Structures\Proton\ListEnvironmentTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property string|null $displayName
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property string $name
 * @property 'CUSTOMER_MANAGED'|null $provisioning
 * @property string|null $recommendedVersion
 */
class EnvironmentTemplateSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     displayName?: string|null,
     *     lastModifiedAt: \Aws\Api\DateTimeResult,
     *     name: string,
     *     provisioning?: 'CUSTOMER_MANAGED'|null,
     *     recommendedVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
