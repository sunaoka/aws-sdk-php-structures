<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListStackInstancesForProvisionedProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Account
 * @property string|null $Region
 * @property 'CURRENT'|'OUTDATED'|'INOPERABLE'|null $StackInstanceStatus
 */
class StackInstance extends Shape
{
    /**
     * @param array{
     *     Account?: string|null,
     *     Region?: string|null,
     *     StackInstanceStatus?: 'CURRENT'|'OUTDATED'|'INOPERABLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
