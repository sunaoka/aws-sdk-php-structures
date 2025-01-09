<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PanelTitleOptions $Title
 * @property 'HIDDEN'|'VISIBLE' $BorderVisibility
 * @property string $BorderThickness
 * @property 'SOLID'|'DASHED'|'DOTTED' $BorderStyle
 * @property string $BorderColor
 * @property 'HIDDEN'|'VISIBLE' $GutterVisibility
 * @property string $GutterSpacing
 * @property 'HIDDEN'|'VISIBLE' $BackgroundVisibility
 * @property string $BackgroundColor
 */
class PanelConfiguration extends Shape
{
    /**
     * @param array{
     *     Title?: PanelTitleOptions,
     *     BorderVisibility?: 'HIDDEN'|'VISIBLE',
     *     BorderThickness?: string,
     *     BorderStyle?: 'SOLID'|'DASHED'|'DOTTED',
     *     BorderColor?: string,
     *     GutterVisibility?: 'HIDDEN'|'VISIBLE',
     *     GutterSpacing?: string,
     *     BackgroundVisibility?: 'HIDDEN'|'VISIBLE',
     *     BackgroundColor?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
