<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 * @property string $Description
 * @property int $MaxSessionDuration
 */
class UpdateRoleRequest extends Request
{
    /**
     * @param array{
     *     RoleName: string,
     *     Description?: string,
     *     MaxSessionDuration?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
