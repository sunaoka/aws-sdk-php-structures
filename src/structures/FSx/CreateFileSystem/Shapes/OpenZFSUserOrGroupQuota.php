<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USER'|'GROUP' $Type
 * @property int $Id
 * @property int $StorageCapacityQuotaGiB
 */
class OpenZFSUserOrGroupQuota extends Shape
{
    /**
     * @param array{
     *     Type: 'USER'|'GROUP',
     *     Id: int,
     *     StorageCapacityQuotaGiB: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
