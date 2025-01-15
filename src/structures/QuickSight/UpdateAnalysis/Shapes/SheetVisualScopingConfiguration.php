<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SheetId
 * @property 'ALL_VISUALS'|'SELECTED_VISUALS' $Scope
 * @property list<string>|null $VisualIds
 */
class SheetVisualScopingConfiguration extends Shape
{
    /**
     * @param array{
     *     SheetId: string,
     *     Scope: 'ALL_VISUALS'|'SELECTED_VISUALS',
     *     VisualIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
