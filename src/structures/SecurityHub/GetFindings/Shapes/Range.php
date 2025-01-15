<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Start
 * @property int|null $End
 * @property int|null $StartColumn
 */
class Range extends Shape
{
    /**
     * @param array{
     *     Start?: int|null,
     *     End?: int|null,
     *     StartColumn?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
