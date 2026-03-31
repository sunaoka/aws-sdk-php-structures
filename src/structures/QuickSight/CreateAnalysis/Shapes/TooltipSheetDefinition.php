<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SheetId
 * @property string|null $Name
 * @property list<Visual>|null $Visuals
 * @property list<SheetTextBox>|null $TextBoxes
 * @property list<SheetImage>|null $Images
 * @property list<Layout>|null $Layouts
 */
class TooltipSheetDefinition extends Shape
{
    /**
     * @param array{
     *     SheetId: string,
     *     Name?: string|null,
     *     Visuals?: list<Visual>|null,
     *     TextBoxes?: list<SheetTextBox>|null,
     *     Images?: list<SheetImage>|null,
     *     Layouts?: list<Layout>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
