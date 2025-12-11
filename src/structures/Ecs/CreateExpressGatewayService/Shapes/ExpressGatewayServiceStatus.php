<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateExpressGatewayService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'DRAINING'|'INACTIVE'|null $statusCode
 * @property string|null $statusReason
 */
class ExpressGatewayServiceStatus extends Shape
{
    /**
     * @param array{
     *     statusCode?: 'ACTIVE'|'DRAINING'|'INACTIVE'|null,
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
