<?php

namespace Sunaoka\Aws\Structures\PCS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JwtKey|null $jwtKey
 */
class JwtAuth extends Shape
{
    /**
     * @param array{jwtKey?: JwtKey|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
