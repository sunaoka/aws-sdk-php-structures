<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListEventDataStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<AdvancedFieldSelector> $FieldSelectors
 */
class AdvancedEventSelector extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     FieldSelectors: list<AdvancedFieldSelector>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
