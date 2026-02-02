<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property list<ColumnIdentifier>|null $AdditionalFields
 */
class VisualCustomizationFieldsConfiguration extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     AdditionalFields?: list<ColumnIdentifier>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
