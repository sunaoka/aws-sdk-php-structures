<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $GroupName
 * @property string $Description
 * @property string $PrincipalId
 */
class Group extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     GroupName?: string,
     *     Description?: string,
     *     PrincipalId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
