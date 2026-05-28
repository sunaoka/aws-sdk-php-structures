<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\GetControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'REQUIRED'|'OPTIONAL'|null $Requirement
 */
class ControlParameter extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Requirement?: 'REQUIRED'|'OPTIONAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
