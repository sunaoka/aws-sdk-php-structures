<?php

namespace Sunaoka\Aws\Structures\DAX\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 */
class SSESpecification extends Shape
{
    /**
     * @param array{Enabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
