<?php

namespace Sunaoka\Aws\Structures\DataZone\QueryGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $formNames
 */
class AdditionalAttributes extends Shape
{
    /**
     * @param array{formNames?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
