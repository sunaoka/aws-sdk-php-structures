<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomEpoch
 */
class DisabledLockingSettings extends Shape
{
    /**
     * @param array{CustomEpoch?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
