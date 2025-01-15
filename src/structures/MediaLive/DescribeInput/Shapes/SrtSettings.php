<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SrtCallerSource>|null $SrtCallerSources
 */
class SrtSettings extends Shape
{
    /**
     * @param array{SrtCallerSources?: list<SrtCallerSource>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
