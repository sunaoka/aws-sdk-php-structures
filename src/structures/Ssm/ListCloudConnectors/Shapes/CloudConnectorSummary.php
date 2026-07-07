<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCloudConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CloudConnectorId
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property string|null $RoleArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class CloudConnectorSummary extends Shape
{
    /**
     * @param array{
     *     CloudConnectorId?: string|null,
     *     DisplayName?: string|null,
     *     Description?: string|null,
     *     RoleArn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
