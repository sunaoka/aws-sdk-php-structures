<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 */
class AzElEphemerisFilter extends Shape
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
