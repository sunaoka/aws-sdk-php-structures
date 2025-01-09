<?php

namespace Sunaoka\Aws\Structures\EKSAuth\AssumeRoleForPodIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $associationArn
 * @property string $associationId
 */
class PodIdentityAssociation extends Shape
{
    /**
     * @param array{
     *     associationArn: string,
     *     associationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
