<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SrtCallerSource> $SrtCallerSources
 */
class SrtSettings extends Shape
{
    /**
     * @param array{SrtCallerSources?: list<SrtCallerSource>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
