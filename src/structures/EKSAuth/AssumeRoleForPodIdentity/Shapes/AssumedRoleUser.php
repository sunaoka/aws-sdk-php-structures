<?php

namespace Sunaoka\Aws\Structures\EKSAuth\AssumeRoleForPodIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $assumeRoleId
 */
class AssumedRoleUser extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     assumeRoleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
