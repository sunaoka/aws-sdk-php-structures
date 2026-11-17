<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 */
class DeleteReplication extends Shape
{
    /**
     * @param array{enabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
