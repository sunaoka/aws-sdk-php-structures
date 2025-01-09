<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterName
 */
class HyperPodPropertiesInput extends Shape
{
    /**
     * @param array{clusterName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
