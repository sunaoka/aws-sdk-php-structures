<?php

namespace Sunaoka\Aws\Structures\Odb\GetOdbNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING'|null $status
 * @property string|null $cidr
 */
class ZeroEtlAccess extends Shape
{
    /**
     * @param array{
     *     status?: 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING'|null,
     *     cidr?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
