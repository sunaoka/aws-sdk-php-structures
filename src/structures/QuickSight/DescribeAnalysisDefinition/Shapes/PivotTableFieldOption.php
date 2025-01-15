<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property string|null $CustomLabel
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 */
class PivotTableFieldOption extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     CustomLabel?: string|null,
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
