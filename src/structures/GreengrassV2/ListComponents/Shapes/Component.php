<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $componentName
 * @property ComponentLatestVersion|null $latestVersion
 */
class Component extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     componentName?: string|null,
     *     latestVersion?: ComponentLatestVersion|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
