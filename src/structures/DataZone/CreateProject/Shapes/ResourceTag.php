<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $value
 * @property 'PROJECT'|'PROJECT_PROFILE' $source
 */
class ResourceTag extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value: string,
     *     source: 'PROJECT'|'PROJECT_PROFILE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
