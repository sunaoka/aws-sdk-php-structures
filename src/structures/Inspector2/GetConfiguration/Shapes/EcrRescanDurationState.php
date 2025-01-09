<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DAYS_14'|'DAYS_30'|'DAYS_60'|'DAYS_90'|'DAYS_180' $pullDateRescanDuration
 * @property 'LIFETIME'|'DAYS_30'|'DAYS_180'|'DAYS_14'|'DAYS_60'|'DAYS_90' $rescanDuration
 * @property 'SUCCESS'|'PENDING'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class EcrRescanDurationState extends Shape
{
    /**
     * @param array{
     *     pullDateRescanDuration?: 'DAYS_14'|'DAYS_30'|'DAYS_60'|'DAYS_90'|'DAYS_180',
     *     rescanDuration?: 'LIFETIME'|'DAYS_30'|'DAYS_180'|'DAYS_14'|'DAYS_60'|'DAYS_90',
     *     status?: 'SUCCESS'|'PENDING'|'FAILED',
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
