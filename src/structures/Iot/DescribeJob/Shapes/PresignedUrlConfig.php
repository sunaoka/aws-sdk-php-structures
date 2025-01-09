<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property int<60, 3600> $expiresInSec
 */
class PresignedUrlConfig extends Shape
{
    /**
     * @param array{
     *     roleArn?: string,
     *     expiresInSec?: int<60, 3600>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
