<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldId
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 */
class FieldLabelType extends Shape
{
    /**
     * @param array{
     *     FieldId?: string|null,
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
