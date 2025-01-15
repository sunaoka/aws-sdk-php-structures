<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\BatchGetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property string|null $url
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
