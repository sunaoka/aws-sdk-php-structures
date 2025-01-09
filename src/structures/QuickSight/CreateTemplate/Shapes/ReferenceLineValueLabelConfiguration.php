<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BEFORE_CUSTOM_LABEL'|'AFTER_CUSTOM_LABEL' $RelativePosition
 * @property NumericFormatConfiguration $FormatConfiguration
 */
class ReferenceLineValueLabelConfiguration extends Shape
{
    /**
     * @param array{
     *     RelativePosition?: 'BEFORE_CUSTOM_LABEL'|'AFTER_CUSTOM_LABEL',
     *     FormatConfiguration?: NumericFormatConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
