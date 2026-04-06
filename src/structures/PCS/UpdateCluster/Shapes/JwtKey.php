<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretArn
 * @property string $secretVersion
 */
class JwtKey extends Shape
{
    /**
     * @param array{
     *     secretArn: string,
     *     secretVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
