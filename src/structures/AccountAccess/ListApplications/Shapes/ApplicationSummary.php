<?php

namespace Sunaoka\Aws\Structures\AccountAccess\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationArn
 * @property string|null $tenantId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     applicationArn: string,
     *     tenantId?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
