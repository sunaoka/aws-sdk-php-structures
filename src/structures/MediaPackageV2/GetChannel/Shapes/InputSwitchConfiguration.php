<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $MQCSInputSwitching
 */
class InputSwitchConfiguration extends Shape
{
    /**
     * @param array{MQCSInputSwitching?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
