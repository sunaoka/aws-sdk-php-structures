<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Start
 * @property int $End
 * @property int $StartColumn
 */
class Range extends Shape
{
    /**
     * @param array{
     *     Start?: int,
     *     End?: int,
     *     StartColumn?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
