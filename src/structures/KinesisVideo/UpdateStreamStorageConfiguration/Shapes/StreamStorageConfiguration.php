<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateStreamStorageConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOT'|'WARM' $DefaultStorageTier
 */
class StreamStorageConfiguration extends Shape
{
    /**
     * @param array{DefaultStorageTier: 'HOT'|'WARM'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
