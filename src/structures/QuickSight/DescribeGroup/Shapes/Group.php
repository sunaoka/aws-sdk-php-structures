<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $GroupName
 * @property string|null $Description
 * @property string|null $PrincipalId
 */
class Group extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     GroupName?: string|null,
     *     Description?: string|null,
     *     PrincipalId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
