<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $MQCSInputSwitching
 */
class InputSwitchConfiguration extends Shape
{
    /**
     * @param array{MQCSInputSwitching?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
