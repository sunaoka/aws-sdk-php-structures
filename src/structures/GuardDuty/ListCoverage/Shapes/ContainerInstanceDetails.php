<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CoveredContainerInstances
 * @property int $CompatibleContainerInstances
 */
class ContainerInstanceDetails extends Shape
{
    /**
     * @param array{
     *     CoveredContainerInstances?: int,
     *     CompatibleContainerInstances?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
