<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteAppInputSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eksClusterArn
 * @property string $namespace
 */
class EksSourceClusterNamespace extends Shape
{
    /**
     * @param array{
     *     eksClusterArn: string,
     *     namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
