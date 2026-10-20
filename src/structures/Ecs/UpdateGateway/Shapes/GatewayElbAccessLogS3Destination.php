<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string|null $prefix
 */
class GatewayElbAccessLogS3Destination extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
