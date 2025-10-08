<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'tags'|null $FieldName
 * @property MapFilter|null $Filter
 */
class ResourcesMapFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'tags'|null,
     *     Filter?: MapFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
