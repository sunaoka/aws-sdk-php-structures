<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListSecurityRequirementPacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $packId
 * @property string $name
 * @property string|null $description
 * @property string|null $vendorName
 * @property 'AWS_MANAGED'|'CUSTOMER_MANAGED' $managementType
 * @property 'ENABLED'|'DISABLED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class SecurityRequirementPackSummary extends Shape
{
    /**
     * @param array{
     *     packId: string,
     *     name: string,
     *     description?: string|null,
     *     vendorName?: string|null,
     *     managementType: 'AWS_MANAGED'|'CUSTOMER_MANAGED',
     *     status: 'ENABLED'|'DISABLED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
