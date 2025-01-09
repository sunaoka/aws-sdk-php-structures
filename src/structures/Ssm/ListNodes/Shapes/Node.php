<?php

namespace Sunaoka\Aws\Structures\Ssm\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CaptureTime
 * @property string $Id
 * @property NodeOwnerInfo $Owner
 * @property string $Region
 * @property NodeType $NodeType
 */
class Node extends Shape
{
    /**
     * @param array{
     *     CaptureTime?: \Aws\Api\DateTimeResult,
     *     Id?: string,
     *     Owner?: NodeOwnerInfo,
     *     Region?: string,
     *     NodeType?: NodeType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
