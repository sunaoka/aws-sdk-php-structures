<?php

namespace Sunaoka\Aws\Structures\RecycleBin\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceTagKey
 * @property string|null $ResourceTagValue
 */
class ResourceTag extends Shape
{
    /**
     * @param array{
     *     ResourceTagKey: string,
     *     ResourceTagValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
