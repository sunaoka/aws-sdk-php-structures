<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ElementId
 * @property 'VISUAL'|'FILTER_CONTROL'|'PARAMETER_CONTROL'|'TEXT_BOX'|'IMAGE' $ElementType
 * @property string $XAxisLocation
 * @property string $YAxisLocation
 * @property string $Width
 * @property string $Height
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 * @property list<SheetElementRenderingRule>|null $RenderingRules
 * @property FreeFormLayoutElementBorderStyle|null $BorderStyle
 * @property FreeFormLayoutElementBorderStyle|null $SelectedBorderStyle
 * @property FreeFormLayoutElementBackgroundStyle|null $BackgroundStyle
 * @property LoadingAnimation|null $LoadingAnimation
 * @property string|null $BorderRadius
 * @property string|null $Padding
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
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null,
     *     RenderingRules?: list<SheetElementRenderingRule>|null,
     *     BorderStyle?: FreeFormLayoutElementBorderStyle|null,
     *     SelectedBorderStyle?: FreeFormLayoutElementBorderStyle|null,
     *     BackgroundStyle?: FreeFormLayoutElementBackgroundStyle|null,
     *     LoadingAnimation?: LoadingAnimation|null,
     *     BorderRadius?: string|null,
     *     Padding?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
