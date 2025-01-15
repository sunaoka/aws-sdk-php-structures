<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListIncidentRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int>|null $integerValues
 * @property list<string>|null $stringValues
 */
class AttributeValueList extends Shape
{
    /**
     * @param array{
     *     integerValues?: list<int>|null,
     *     stringValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
