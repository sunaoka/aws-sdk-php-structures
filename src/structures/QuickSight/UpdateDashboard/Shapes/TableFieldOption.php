<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property string|null $Width
 * @property string|null $CustomLabel
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 * @property TableFieldURLConfiguration|null $URLStyling
 */
class TableFieldOption extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Width?: string|null,
     *     CustomLabel?: string|null,
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null,
     *     URLStyling?: TableFieldURLConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
