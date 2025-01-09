<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 * @property int $number
 */
class CodeLine extends Shape
{
    /**
     * @param array{
     *     content?: string,
     *     number?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
