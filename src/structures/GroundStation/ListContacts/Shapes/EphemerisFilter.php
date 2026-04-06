<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzElEphemerisFilter|null $azEl
 */
class EphemerisFilter extends Shape
{
    /**
     * @param array{azEl?: AzElEphemerisFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
