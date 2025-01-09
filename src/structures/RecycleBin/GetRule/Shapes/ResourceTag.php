<?php

namespace Sunaoka\Aws\Structures\RecycleBin\GetRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceTagKey
 * @property string $ResourceTagValue
 */
class ResourceTag extends Shape
{
    /**
     * @param array{
     *     ResourceTagKey: string,
     *     ResourceTagValue?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
