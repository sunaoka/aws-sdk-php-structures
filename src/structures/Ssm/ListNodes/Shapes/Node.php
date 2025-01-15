<?php

namespace Sunaoka\Aws\Structures\Ssm\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CaptureTime
 * @property string|null $Id
 * @property NodeOwnerInfo|null $Owner
 * @property string|null $Region
 * @property NodeType|null $NodeType
 */
class Node extends Shape
{
    /**
     * @param array{
     *     CaptureTime?: \Aws\Api\DateTimeResult|null,
     *     Id?: string|null,
     *     Owner?: NodeOwnerInfo|null,
     *     Region?: string|null,
     *     NodeType?: NodeType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
