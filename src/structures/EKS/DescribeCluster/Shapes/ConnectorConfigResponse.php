<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $activationId
 * @property string $activationCode
 * @property \Aws\Api\DateTimeResult $activationExpiry
 * @property string $provider
 * @property string $roleArn
 */
class ConnectorConfigResponse extends Shape
{
    /**
     * @param array{
     *     activationId?: string,
     *     activationCode?: string,
     *     activationExpiry?: \Aws\Api\DateTimeResult,
     *     provider?: string,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
