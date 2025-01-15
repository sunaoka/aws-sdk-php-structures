<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetAnalysisTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $referencedTables
 */
class AnalysisSchema extends Shape
{
    /**
     * @param array{referencedTables?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
