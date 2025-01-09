<?php

namespace Sunaoka\Aws\Structures\AppRegistry\PutConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TagQueryConfiguration $tagQueryConfiguration
 */
class AppRegistryConfiguration extends Shape
{
    /**
     * @param array{tagQueryConfiguration?: TagQueryConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
