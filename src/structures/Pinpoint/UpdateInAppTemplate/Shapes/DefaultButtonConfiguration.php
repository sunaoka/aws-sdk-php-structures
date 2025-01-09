<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateInAppTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackgroundColor
 * @property int $BorderRadius
 * @property 'LINK'|'DEEP_LINK'|'CLOSE' $ButtonAction
 * @property string $Link
 * @property string $Text
 * @property string $TextColor
 */
class DefaultButtonConfiguration extends Shape
{
    /**
     * @param array{
     *     BackgroundColor?: string,
     *     BorderRadius?: int,
     *     ButtonAction: 'LINK'|'DEEP_LINK'|'CLOSE',
     *     Link?: string,
     *     Text: string,
     *     TextColor?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
