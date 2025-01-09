<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property string $Width
 * @property string $CustomLabel
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 * @property TableFieldURLConfiguration $URLStyling
 */
class TableFieldOption extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Width?: string,
     *     CustomLabel?: string,
     *     Visibility?: 'HIDDEN'|'VISIBLE',
     *     URLStyling?: TableFieldURLConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
