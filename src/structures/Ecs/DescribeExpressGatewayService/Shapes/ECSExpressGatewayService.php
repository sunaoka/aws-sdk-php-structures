<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeExpressGatewayService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $cluster
 * @property string|null $serviceName
 * @property string|null $serviceArn
 * @property string|null $infrastructureRoleArn
 * @property ExpressGatewayServiceStatus|null $status
 * @property string|null $currentDeployment
 * @property list<ExpressGatewayServiceConfiguration>|null $activeConfigurations
 * @property list<Tag>|null $tags
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ECSExpressGatewayService extends Shape
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     serviceName?: string|null,
     *     serviceArn?: string|null,
     *     infrastructureRoleArn?: string|null,
     *     status?: ExpressGatewayServiceStatus|null,
     *     currentDeployment?: string|null,
     *     activeConfigurations?: list<ExpressGatewayServiceConfiguration>|null,
     *     tags?: list<Tag>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
