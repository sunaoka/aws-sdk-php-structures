<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TagQueryConfiguration|null $tagQueryConfiguration
 */
class AppRegistryConfiguration extends Shape
{
    /**
     * @param array{tagQueryConfiguration?: TagQueryConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
