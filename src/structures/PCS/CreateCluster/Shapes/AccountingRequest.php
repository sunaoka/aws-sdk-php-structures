<?php

namespace Sunaoka\Aws\Structures\PCS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STANDARD'|'NONE' $mode
 * @property int<-1, 10000>|null $defaultPurgeTimeInDays
 */
class AccountingRequest extends Shape
{
    /**
     * @param array{
     *     mode: 'STANDARD'|'NONE',
     *     defaultPurgeTimeInDays?: int<-1, 10000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
