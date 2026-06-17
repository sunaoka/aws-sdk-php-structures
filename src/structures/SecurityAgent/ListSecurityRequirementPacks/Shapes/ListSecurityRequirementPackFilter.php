<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListSecurityRequirementPacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_MANAGED'|'CUSTOMER_MANAGED'|null $managementType
 * @property 'ENABLED'|'DISABLED'|null $status
 */
class ListSecurityRequirementPackFilter extends Shape
{
    /**
     * @param array{
     *     managementType?: 'AWS_MANAGED'|'CUSTOMER_MANAGED'|null,
     *     status?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
