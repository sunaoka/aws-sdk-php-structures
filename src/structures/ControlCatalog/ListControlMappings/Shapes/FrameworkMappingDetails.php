<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListControlMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Item
 */
class FrameworkMappingDetails extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Item: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
