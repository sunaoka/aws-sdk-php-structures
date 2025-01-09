<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeMediaStorageConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamARN
 * @property 'ENABLED'|'DISABLED' $Status
 */
class MediaStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     StreamARN?: string,
     *     Status: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
