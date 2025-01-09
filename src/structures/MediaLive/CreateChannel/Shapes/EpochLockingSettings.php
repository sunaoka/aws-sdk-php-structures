<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomEpoch
 * @property string $JamSyncTime
 */
class EpochLockingSettings extends Shape
{
    /**
     * @param array{
     *     CustomEpoch?: string,
     *     JamSyncTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
