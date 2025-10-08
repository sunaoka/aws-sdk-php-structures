<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\ListDashboards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string|null $description
 * @property 'CUSTOM' $type
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DashboardReference extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     description?: string|null,
     *     type: 'CUSTOM',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
