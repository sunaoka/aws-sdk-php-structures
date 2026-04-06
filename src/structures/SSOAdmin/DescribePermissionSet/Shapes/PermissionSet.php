<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribePermissionSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $PermissionSetArn
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $SessionDuration
 * @property string|null $RelayState
 */
class PermissionSet extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     PermissionSetArn?: string|null,
     *     Description?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     SessionDuration?: string|null,
     *     RelayState?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
