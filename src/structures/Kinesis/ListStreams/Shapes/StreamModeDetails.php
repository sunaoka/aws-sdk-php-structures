<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVISIONED'|'ON_DEMAND' $StreamMode
 */
class StreamModeDetails extends Shape
{
    /**
     * @param array{StreamMode: 'PROVISIONED'|'ON_DEMAND'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
