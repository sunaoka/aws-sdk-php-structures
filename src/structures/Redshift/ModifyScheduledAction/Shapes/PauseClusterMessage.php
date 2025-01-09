<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyScheduledAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterIdentifier
 */
class PauseClusterMessage extends Shape
{
    /**
     * @param array{ClusterIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
