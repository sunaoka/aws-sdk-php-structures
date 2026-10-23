<?php

namespace Sunaoka\Aws\Structures\Continuum\AssociateCollector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $collectorId
 * @property string $collectorArn
 */
class AssociatedCollector extends Shape
{
    /**
     * @param array{
     *     collectorId: string,
     *     collectorArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
