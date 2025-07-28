<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $MQCSInputSwitching
 * @property int<1, 2>|null $PreferredInput
 */
class InputSwitchConfiguration extends Shape
{
    /**
     * @param array{
     *     MQCSInputSwitching?: bool|null,
     *     PreferredInput?: int<1, 2>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
