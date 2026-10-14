<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationNfs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTOMATIC'|'NFS3'|'NFS4_0'|'NFS4_1'|'NFS4_2'|null $Version
 */
class NfsMountOptions extends Shape
{
    /**
     * @param array{Version?: 'AUTOMATIC'|'NFS3'|'NFS4_0'|'NFS4_1'|'NFS4_2'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
