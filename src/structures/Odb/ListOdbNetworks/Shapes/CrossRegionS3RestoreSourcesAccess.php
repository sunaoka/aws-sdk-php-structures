<?php

namespace Sunaoka\Aws\Structures\Odb\ListOdbNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $region
 * @property list<string>|null $ipv4Addresses
 * @property 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING'|null $status
 */
class CrossRegionS3RestoreSourcesAccess extends Shape
{
    /**
     * @param array{
     *     region?: string|null,
     *     ipv4Addresses?: list<string>|null,
     *     status?: 'ENABLED'|'ENABLING'|'DISABLED'|'DISABLING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
