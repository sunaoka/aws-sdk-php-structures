<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\BatchGetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $number
 * @property string|null $content
 */
class CodeLine extends Shape
{
    /**
     * @param array{
     *     number?: int|null,
     *     content?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
