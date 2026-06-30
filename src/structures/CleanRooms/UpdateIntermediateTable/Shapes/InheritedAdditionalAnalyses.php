<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIntermediateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED' $value
 * @property list<InheritedAdditionalAnalysesSource> $sources
 */
class InheritedAdditionalAnalyses extends Shape
{
    /**
     * @param array{
     *     value: 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED',
     *     sources: list<InheritedAdditionalAnalysesSource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
