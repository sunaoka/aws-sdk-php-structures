<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFarms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $displayName
 * @property string|null $kmsKeyArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class FarmSummary extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     displayName: string,
     *     kmsKeyArn?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
