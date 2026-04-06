<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomEpoch
 * @property string|null $JamSyncTime
 */
class EpochLockingSettings extends Shape
{
    /**
     * @param array{
     *     CustomEpoch?: string|null,
     *     JamSyncTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
