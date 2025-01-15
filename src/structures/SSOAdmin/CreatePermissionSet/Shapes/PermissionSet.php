<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreatePermissionSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $Description
 * @property string|null $Name
 * @property string|null $PermissionSetArn
 * @property string|null $RelayState
 * @property string|null $SessionDuration
 */
class PermissionSet extends Shape
{
    /**
     * @param array{
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     Name?: string|null,
     *     PermissionSetArn?: string|null,
     *     RelayState?: string|null,
     *     SessionDuration?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
