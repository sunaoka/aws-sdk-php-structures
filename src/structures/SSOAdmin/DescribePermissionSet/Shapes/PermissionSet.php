<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribePermissionSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $Description
 * @property string $Name
 * @property string $PermissionSetArn
 * @property string $RelayState
 * @property string $SessionDuration
 */
class PermissionSet extends Shape
{
    /**
     * @param array{
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     Name?: string,
     *     PermissionSetArn?: string,
     *     RelayState?: string,
     *     SessionDuration?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
