<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Tag $Tag
 * @property string $ResourceName
 * @property string $ResourceType
 */
class TaggedResource extends Shape
{
    /**
     * @param array{
     *     Tag?: Tag,
     *     ResourceName?: string,
     *     ResourceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
