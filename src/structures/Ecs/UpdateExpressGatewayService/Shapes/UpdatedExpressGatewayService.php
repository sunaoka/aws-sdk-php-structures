<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateExpressGatewayService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceArn
 * @property string|null $cluster
 * @property string|null $serviceName
 * @property ExpressGatewayServiceStatus|null $status
 * @property ExpressGatewayServiceConfiguration|null $targetConfiguration
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class UpdatedExpressGatewayService extends Shape
{
    /**
     * @param array{
     *     serviceArn?: string|null,
     *     cluster?: string|null,
     *     serviceName?: string|null,
     *     status?: ExpressGatewayServiceStatus|null,
     *     targetConfiguration?: ExpressGatewayServiceConfiguration|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
