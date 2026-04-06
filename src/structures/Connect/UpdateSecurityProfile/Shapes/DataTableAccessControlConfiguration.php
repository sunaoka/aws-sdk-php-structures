<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrimaryAttributeAccessControlConfigurationItem|null $PrimaryAttributeAccessControlConfiguration
 */
class DataTableAccessControlConfiguration extends Shape
{
    /**
     * @param array{PrimaryAttributeAccessControlConfiguration?: PrimaryAttributeAccessControlConfigurationItem|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
