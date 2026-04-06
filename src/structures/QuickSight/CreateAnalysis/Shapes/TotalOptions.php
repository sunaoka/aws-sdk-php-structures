<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $TotalsVisibility
 * @property 'START'|'END'|null $Placement
 * @property 'PINNED'|'SCROLLED'|null $ScrollStatus
 * @property string|null $CustomLabel
 * @property TableCellStyle|null $TotalCellStyle
 */
class TotalOptions extends Shape
{
    /**
     * @param array{
     *     TotalsVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     Placement?: 'START'|'END'|null,
     *     ScrollStatus?: 'PINNED'|'SCROLLED'|null,
     *     CustomLabel?: string|null,
     *     TotalCellStyle?: TableCellStyle|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
