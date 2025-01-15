<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FlowArn
 */
class MediaConnectFlow extends Shape
{
    /**
     * @param array{FlowArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
