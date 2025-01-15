<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetInAppTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BackgroundColor
 * @property int|null $BorderRadius
 * @property 'LINK'|'DEEP_LINK'|'CLOSE' $ButtonAction
 * @property string|null $Link
 * @property string $Text
 * @property string|null $TextColor
 */
class DefaultButtonConfiguration extends Shape
{
    /**
     * @param array{
     *     BackgroundColor?: string|null,
     *     BorderRadius?: int|null,
     *     ButtonAction: 'LINK'|'DEEP_LINK'|'CLOSE',
     *     Link?: string|null,
     *     Text: string,
     *     TextColor?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
