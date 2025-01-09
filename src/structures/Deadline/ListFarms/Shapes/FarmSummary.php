<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFarms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $displayName
 * @property string $kmsKeyArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class FarmSummary extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     displayName: string,
     *     kmsKeyArn?: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     updatedBy?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
