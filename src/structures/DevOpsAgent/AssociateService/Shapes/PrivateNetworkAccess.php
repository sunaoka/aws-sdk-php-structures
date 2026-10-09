<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AssociateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $privateConnectionName
 * @property string $runtimeRoleArn
 */
class PrivateNetworkAccess extends Shape
{
    /**
     * @param array{
     *     privateConnectionName: string,
     *     runtimeRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
