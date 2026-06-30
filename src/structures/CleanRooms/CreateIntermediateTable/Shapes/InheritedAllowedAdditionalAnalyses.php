<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIntermediateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $value
 * @property list<InheritedAllowedAdditionalAnalysesSource> $sources
 */
class InheritedAllowedAdditionalAnalyses extends Shape
{
    /**
     * @param array{
     *     value: list<string>,
     *     sources: list<InheritedAllowedAdditionalAnalysesSource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
