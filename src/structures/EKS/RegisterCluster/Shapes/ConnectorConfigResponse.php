<?php

namespace Sunaoka\Aws\Structures\EKS\RegisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $activationId
 * @property string|null $activationCode
 * @property \Aws\Api\DateTimeResult|null $activationExpiry
 * @property string|null $provider
 * @property string|null $roleArn
 */
class ConnectorConfigResponse extends Shape
{
    /**
     * @param array{
     *     activationId?: string|null,
     *     activationCode?: string|null,
     *     activationExpiry?: \Aws\Api\DateTimeResult|null,
     *     provider?: string|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
