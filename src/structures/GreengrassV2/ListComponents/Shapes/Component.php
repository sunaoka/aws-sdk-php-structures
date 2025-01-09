<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $componentName
 * @property ComponentLatestVersion $latestVersion
 */
class Component extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     componentName?: string,
     *     latestVersion?: ComponentLatestVersion
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
