<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListControlMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CommonControlArn
 */
class CommonControlMappingDetails extends Shape
{
    /**
     * @param array{CommonControlArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
