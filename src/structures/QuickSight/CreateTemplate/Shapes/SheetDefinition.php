<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SheetId
 * @property string $Title
 * @property string $Description
 * @property string $Name
 * @property list<ParameterControl> $ParameterControls
 * @property list<FilterControl> $FilterControls
 * @property list<Visual> $Visuals
 * @property list<SheetTextBox> $TextBoxes
 * @property list<SheetImage> $Images
 * @property list<Layout> $Layouts
 * @property list<SheetControlLayout> $SheetControlLayouts
 * @property 'PAGINATED'|'INTERACTIVE' $ContentType
 */
class SheetDefinition extends Shape
{
    /**
     * @param array{
     *     SheetId: string,
     *     Title?: string,
     *     Description?: string,
     *     Name?: string,
     *     ParameterControls?: list<ParameterControl>,
     *     FilterControls?: list<FilterControl>,
     *     Visuals?: list<Visual>,
     *     TextBoxes?: list<SheetTextBox>,
     *     Images?: list<SheetImage>,
     *     Layouts?: list<Layout>,
     *     SheetControlLayouts?: list<SheetControlLayout>,
     *     ContentType?: 'PAGINATED'|'INTERACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
