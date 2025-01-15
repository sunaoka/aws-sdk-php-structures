<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SheetId
 * @property string|null $Title
 * @property string|null $Description
 * @property string|null $Name
 * @property list<ParameterControl>|null $ParameterControls
 * @property list<FilterControl>|null $FilterControls
 * @property list<Visual>|null $Visuals
 * @property list<SheetTextBox>|null $TextBoxes
 * @property list<SheetImage>|null $Images
 * @property list<Layout>|null $Layouts
 * @property list<SheetControlLayout>|null $SheetControlLayouts
 * @property 'PAGINATED'|'INTERACTIVE'|null $ContentType
 */
class SheetDefinition extends Shape
{
    /**
     * @param array{
     *     SheetId: string,
     *     Title?: string|null,
     *     Description?: string|null,
     *     Name?: string|null,
     *     ParameterControls?: list<ParameterControl>|null,
     *     FilterControls?: list<FilterControl>|null,
     *     Visuals?: list<Visual>|null,
     *     TextBoxes?: list<SheetTextBox>|null,
     *     Images?: list<SheetImage>|null,
     *     Layouts?: list<Layout>|null,
     *     SheetControlLayouts?: list<SheetControlLayout>|null,
     *     ContentType?: 'PAGINATED'|'INTERACTIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
