<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $referencedTables
 */
class AnalysisSchema extends Shape
{
    /**
     * @param array{referencedTables?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
