<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetEventDataStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<AdvancedFieldSelector> $FieldSelectors
 */
class AdvancedEventSelector extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     FieldSelectors: list<AdvancedFieldSelector>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
