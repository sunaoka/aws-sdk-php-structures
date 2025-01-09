<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetGraphSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $count
 * @property list<string> $edgeProperties
 */
class EdgeStructure extends Shape
{
    /**
     * @param array{
     *     count?: int,
     *     edgeProperties?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
