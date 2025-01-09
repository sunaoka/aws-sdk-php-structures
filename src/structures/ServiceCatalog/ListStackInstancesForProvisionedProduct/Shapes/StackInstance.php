<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListStackInstancesForProvisionedProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Account
 * @property string $Region
 * @property 'CURRENT'|'OUTDATED'|'INOPERABLE' $StackInstanceStatus
 */
class StackInstance extends Shape
{
    /**
     * @param array{
     *     Account?: string,
     *     Region?: string,
     *     StackInstanceStatus?: 'CURRENT'|'OUTDATED'|'INOPERABLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
