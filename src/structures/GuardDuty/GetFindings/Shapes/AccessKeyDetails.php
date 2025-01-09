<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccessKeyId
 * @property string $PrincipalId
 * @property string $UserName
 * @property string $UserType
 */
class AccessKeyDetails extends Shape
{
    /**
     * @param array{
     *     AccessKeyId?: string,
     *     PrincipalId?: string,
     *     UserName?: string,
     *     UserType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
