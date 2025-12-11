<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property 'PROJECT'|'PROJECT_PROFILE' $source
 * @property string $value
 */
class ResourceTag extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     source: 'PROJECT'|'PROJECT_PROFILE',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
