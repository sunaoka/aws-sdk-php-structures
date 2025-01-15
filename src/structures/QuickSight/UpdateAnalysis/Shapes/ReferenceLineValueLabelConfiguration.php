<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BEFORE_CUSTOM_LABEL'|'AFTER_CUSTOM_LABEL'|null $RelativePosition
 * @property NumericFormatConfiguration|null $FormatConfiguration
 */
class ReferenceLineValueLabelConfiguration extends Shape
{
    /**
     * @param array{
     *     RelativePosition?: 'BEFORE_CUSTOM_LABEL'|'AFTER_CUSTOM_LABEL'|null,
     *     FormatConfiguration?: NumericFormatConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
