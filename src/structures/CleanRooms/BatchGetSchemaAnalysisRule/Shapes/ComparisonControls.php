<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchemaAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $allowedLiteralComparisonColumns
 * @property list<string> $allowedColumnComparisonColumns
 */
class ComparisonControls extends Shape
{
    /**
     * @param array{
     *     allowedLiteralComparisonColumns: list<string>,
     *     allowedColumnComparisonColumns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
