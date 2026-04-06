<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetGraphSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $count
 * @property list<string>|null $edgeProperties
 */
class EdgeStructure extends Shape
{
    /**
     * @param array{
     *     count?: int|null,
     *     edgeProperties?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
