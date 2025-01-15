<?php

namespace Sunaoka\Aws\Structures\FSx\CreateSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 */
class AdministrativeActionFailureDetails extends Shape
{
    /**
     * @param array{Message?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
