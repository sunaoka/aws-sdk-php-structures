<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property string $policyArn
 * @property string $message
 */
class DeploymentWarningEntry extends Shape
{
    /**
     * @param array{
     *     code: string,
     *     policyArn: string,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
