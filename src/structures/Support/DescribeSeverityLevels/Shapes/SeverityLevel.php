<?php

namespace Sunaoka\Aws\Structures\Support\DescribeSeverityLevels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property string $name
 */
class SeverityLevel extends Shape
{
    /**
     * @param array{
     *     code?: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
