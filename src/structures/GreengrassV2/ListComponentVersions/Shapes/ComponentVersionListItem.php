<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListComponentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $componentName
 * @property string|null $componentVersion
 * @property string|null $arn
 */
class ComponentVersionListItem extends Shape
{
    /**
     * @param array{
     *     componentName?: string|null,
     *     componentVersion?: string|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
