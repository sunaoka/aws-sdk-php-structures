<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListProvisionedProductPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Account'|'Role'|'User' $Key
 * @property string $Value
 */
class AccessLevelFilter extends Shape
{
    /**
     * @param array{
     *     Key?: 'Account'|'Role'|'User',
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
