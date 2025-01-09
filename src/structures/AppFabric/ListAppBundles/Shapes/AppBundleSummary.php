<?php

namespace Sunaoka\Aws\Structures\AppFabric\ListAppBundles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 */
class AppBundleSummary extends Shape
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
