<?php

namespace Sunaoka\Aws\Structures\EKSAuth\AssumeRoleForPodIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $namespace
 * @property string $serviceAccount
 */
class Subject extends Shape
{
    /**
     * @param array{
     *     namespace: string,
     *     serviceAccount: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
