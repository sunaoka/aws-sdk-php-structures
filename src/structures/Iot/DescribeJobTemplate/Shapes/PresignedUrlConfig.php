<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $roleArn
 * @property int<60, 3600>|null $expiresInSec
 */
class PresignedUrlConfig extends Shape
{
    /**
     * @param array{
     *     roleArn?: string|null,
     *     expiresInSec?: int<60, 3600>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
