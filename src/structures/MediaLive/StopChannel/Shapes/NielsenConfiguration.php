<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DistributorId
 * @property 'DISABLED'|'ENABLED' $NielsenPcmToId3Tagging
 */
class NielsenConfiguration extends Shape
{
    /**
     * @param array{
     *     DistributorId?: string,
     *     NielsenPcmToId3Tagging?: 'DISABLED'|'ENABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
