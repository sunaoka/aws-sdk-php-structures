<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GatewayElbAccessLogS3Destination|null $s3
 */
class GatewayElbAccessLogDestination extends Shape
{
    /**
     * @param array{s3?: GatewayElbAccessLogS3Destination|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
