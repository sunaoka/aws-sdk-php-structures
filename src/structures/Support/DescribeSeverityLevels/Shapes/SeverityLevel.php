<?php

namespace Sunaoka\Aws\Structures\Support\DescribeSeverityLevels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $code
 * @property string|null $name
 */
class SeverityLevel extends Shape
{
    /**
     * @param array{
     *     code?: string|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
