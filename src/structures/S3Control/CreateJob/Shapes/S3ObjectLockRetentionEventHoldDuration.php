<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 36500>|null $Days
 * @property int<1, 100>|null $Years
 */
class S3ObjectLockRetentionEventHoldDuration extends Shape
{
    /**
     * @param array{
     *     Days?: int<1, 36500>|null,
     *     Years?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
