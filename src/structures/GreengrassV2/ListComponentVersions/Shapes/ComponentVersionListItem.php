<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListComponentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentName
 * @property string $componentVersion
 * @property string $arn
 */
class ComponentVersionListItem extends Shape
{
    /**
     * @param array{
     *     componentName?: string,
     *     componentVersion?: string,
     *     arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
