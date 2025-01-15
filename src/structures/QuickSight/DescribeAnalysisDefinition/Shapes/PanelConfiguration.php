<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PanelTitleOptions|null $Title
 * @property 'HIDDEN'|'VISIBLE'|null $BorderVisibility
 * @property string|null $BorderThickness
 * @property 'SOLID'|'DASHED'|'DOTTED'|null $BorderStyle
 * @property string|null $BorderColor
 * @property 'HIDDEN'|'VISIBLE'|null $GutterVisibility
 * @property string|null $GutterSpacing
 * @property 'HIDDEN'|'VISIBLE'|null $BackgroundVisibility
 * @property string|null $BackgroundColor
 */
class PanelConfiguration extends Shape
{
    /**
     * @param array{
     *     Title?: PanelTitleOptions|null,
     *     BorderVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     BorderThickness?: string|null,
     *     BorderStyle?: 'SOLID'|'DASHED'|'DOTTED'|null,
     *     BorderColor?: string|null,
     *     GutterVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     GutterSpacing?: string|null,
     *     BackgroundVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     BackgroundColor?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
