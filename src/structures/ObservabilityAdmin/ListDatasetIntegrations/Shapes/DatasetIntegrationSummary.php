<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListDatasetIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string|null $RoleArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class DatasetIntegrationSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     RoleArn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
