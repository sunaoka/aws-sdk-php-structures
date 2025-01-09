<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetInAppTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINK'|'DEEP_LINK'|'CLOSE' $ButtonAction
 * @property string $Link
 */
class OverrideButtonConfiguration extends Shape
{
    /**
     * @param array{
     *     ButtonAction: 'LINK'|'DEEP_LINK'|'CLOSE',
     *     Link?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
