<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PutEventStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationStreamArn
 * @property string $RoleArn
 */
class WriteEventStream extends Shape
{
    /**
     * @param array{
     *     DestinationStreamArn: string,
     *     RoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
