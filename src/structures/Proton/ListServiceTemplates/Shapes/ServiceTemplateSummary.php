<?php

namespace Sunaoka\Aws\Structures\Proton\ListServiceTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property string $displayName
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property string $name
 * @property 'CUSTOMER_MANAGED' $pipelineProvisioning
 * @property string $recommendedVersion
 */
class ServiceTemplateSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     displayName?: string,
     *     lastModifiedAt: \Aws\Api\DateTimeResult,
     *     name: string,
     *     pipelineProvisioning?: 'CUSTOMER_MANAGED',
     *     recommendedVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
