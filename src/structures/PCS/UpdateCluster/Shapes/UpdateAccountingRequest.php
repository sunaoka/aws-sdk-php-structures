<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1, 10000>|null $defaultPurgeTimeInDays
 * @property 'STANDARD'|'NONE'|null $mode
 */
class UpdateAccountingRequest extends Shape
{
    /**
     * @param array{
     *     defaultPurgeTimeInDays?: int<-1, 10000>|null,
     *     mode?: 'STANDARD'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
