<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateMediaStorageConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StreamARN
 * @property 'ENABLED'|'DISABLED' $Status
 */
class MediaStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     StreamARN?: string|null,
     *     Status: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
