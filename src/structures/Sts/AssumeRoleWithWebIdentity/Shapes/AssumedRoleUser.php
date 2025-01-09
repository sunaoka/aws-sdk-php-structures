<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoleWithWebIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssumedRoleId
 * @property string $Arn
 */
class AssumedRoleUser extends Shape
{
    /**
     * @param array{
     *     AssumedRoleId: string,
     *     Arn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
