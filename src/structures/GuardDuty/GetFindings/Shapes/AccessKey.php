<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrincipalId
 * @property string $UserName
 * @property string $UserType
 */
class AccessKey extends Shape
{
    /**
     * @param array{
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
