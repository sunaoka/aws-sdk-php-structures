<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateAddon\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceAccount
 * @property string $roleArn
 */
class AddonPodIdentityAssociations extends Shape
{
    /**
     * @param array{
     *     serviceAccount: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
