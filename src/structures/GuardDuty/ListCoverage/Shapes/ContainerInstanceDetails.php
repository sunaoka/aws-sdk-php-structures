<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CoveredContainerInstances
 * @property int|null $CompatibleContainerInstances
 */
class ContainerInstanceDetails extends Shape
{
    /**
     * @param array{
     *     CoveredContainerInstances?: int|null,
     *     CompatibleContainerInstances?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
