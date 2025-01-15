<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DistributorId
 * @property 'DISABLED'|'ENABLED'|null $NielsenPcmToId3Tagging
 */
class NielsenConfiguration extends Shape
{
    /**
     * @param array{
     *     DistributorId?: string|null,
     *     NielsenPcmToId3Tagging?: 'DISABLED'|'ENABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
