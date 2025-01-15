<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Tag|null $Tag
 * @property string|null $ResourceName
 * @property string|null $ResourceType
 */
class TaggedResource extends Shape
{
    /**
     * @param array{
     *     Tag?: Tag|null,
     *     ResourceName?: string|null,
     *     ResourceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
