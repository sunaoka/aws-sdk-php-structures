<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USER'|'GROUP' $Type
 * @property int<0, 2147483647> $Id
 * @property int<0, 2147483647> $StorageCapacityQuotaGiB
 */
class OpenZFSUserOrGroupQuota extends Shape
{
    /**
     * @param array{
     *     Type: 'USER'|'GROUP',
     *     Id: int<0, 2147483647>,
     *     StorageCapacityQuotaGiB: int<0, 2147483647>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
