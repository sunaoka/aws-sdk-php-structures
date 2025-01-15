<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\SearchProvisionedProducts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Account'|'Role'|'User'|null $Key
 * @property string|null $Value
 */
class AccessLevelFilter extends Shape
{
    /**
     * @param array{
     *     Key?: 'Account'|'Role'|'User'|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
