<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyStreamingProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED_AUTO'|'DISABLED' $Mode
 * @property 'TCP'|'NONE'|null $PreferredProtocol
 */
class GlobalAcceleratorForDirectory extends Shape
{
    /**
     * @param array{
     *     Mode: 'ENABLED_AUTO'|'DISABLED',
     *     PreferredProtocol?: 'TCP'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
