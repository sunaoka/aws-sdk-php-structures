<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LIFETIME'|'DAYS_30'|'DAYS_180'|null $rescanDuration
 * @property 'SUCCESS'|'PENDING'|'FAILED'|null $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class EcrRescanDurationState extends Shape
{
    /**
     * @param array{
     *     rescanDuration?: 'LIFETIME'|'DAYS_30'|'DAYS_180'|null,
     *     status?: 'SUCCESS'|'PENDING'|'FAILED'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
