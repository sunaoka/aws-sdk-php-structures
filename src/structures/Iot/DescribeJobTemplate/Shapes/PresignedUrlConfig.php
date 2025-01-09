<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property int $expiresInSec
 */
class PresignedUrlConfig extends Shape
{
    /**
     * @param array{
     *     roleArn?: string,
     *     expiresInSec?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
