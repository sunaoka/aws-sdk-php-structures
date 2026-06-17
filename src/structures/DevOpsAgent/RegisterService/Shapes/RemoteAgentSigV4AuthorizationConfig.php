<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property string $service
 * @property string|null $roleArn
 */
class RemoteAgentSigV4AuthorizationConfig extends Shape
{
    /**
     * @param array{
     *     region: string,
     *     service: string,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
