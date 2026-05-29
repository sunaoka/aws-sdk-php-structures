<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateTenant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'BOUNCE'|'COMPLAINT'>|null $SuppressedReasons
 * @property 'ACCOUNT'|'TENANT'|null $SuppressionScope
 */
class TenantSuppressionAttributes extends Shape
{
    /**
     * @param array{
     *     SuppressedReasons?: list<'BOUNCE'|'COMPLAINT'>|null,
     *     SuppressionScope?: 'ACCOUNT'|'TENANT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
