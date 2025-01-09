<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListTimelineEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int> $integerValues
 * @property list<string> $stringValues
 */
class AttributeValueList extends Shape
{
    /**
     * @param array{
     *     integerValues?: list<int>,
     *     stringValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
