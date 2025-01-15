<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccessKeyId
 * @property string|null $PrincipalId
 * @property string|null $UserName
 * @property string|null $UserType
 */
class AccessKeyDetails extends Shape
{
    /**
     * @param array{
     *     AccessKeyId?: string|null,
     *     PrincipalId?: string|null,
     *     UserName?: string|null,
     *     UserType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
