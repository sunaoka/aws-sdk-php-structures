<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property string $CustomLabel
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 */
class PivotTableFieldOption extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     CustomLabel?: string,
     *     Visibility?: 'HIDDEN'|'VISIBLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
