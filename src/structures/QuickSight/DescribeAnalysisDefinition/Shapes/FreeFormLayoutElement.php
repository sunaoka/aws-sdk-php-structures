<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ElementId
 * @property 'VISUAL'|'FILTER_CONTROL'|'PARAMETER_CONTROL'|'TEXT_BOX'|'IMAGE' $ElementType
 * @property string $XAxisLocation
 * @property string $YAxisLocation
 * @property string $Width
 * @property string $Height
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 * @property list<SheetElementRenderingRule> $RenderingRules
 * @property FreeFormLayoutElementBorderStyle $BorderStyle
 * @property FreeFormLayoutElementBorderStyle $SelectedBorderStyle
 * @property FreeFormLayoutElementBackgroundStyle $BackgroundStyle
 * @property LoadingAnimation $LoadingAnimation
 */
class FreeFormLayoutElement extends Shape
{
    /**
     * @param array{
     *     ElementId: string,
     *     ElementType: 'VISUAL'|'FILTER_CONTROL'|'PARAMETER_CONTROL'|'TEXT_BOX'|'IMAGE',
     *     XAxisLocation: string,
     *     YAxisLocation: string,
     *     Width: string,
     *     Height: string,
     *     Visibility?: 'HIDDEN'|'VISIBLE',
     *     RenderingRules?: list<SheetElementRenderingRule>,
     *     BorderStyle?: FreeFormLayoutElementBorderStyle,
     *     SelectedBorderStyle?: FreeFormLayoutElementBorderStyle,
     *     BackgroundStyle?: FreeFormLayoutElementBackgroundStyle,
     *     LoadingAnimation?: LoadingAnimation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
