<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetRotation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HandOffTime $Start
 * @property HandOffTime $End
 */
class CoverageTime extends Shape
{
    /**
     * @param array{
     *     Start?: HandOffTime,
     *     End?: HandOffTime
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
