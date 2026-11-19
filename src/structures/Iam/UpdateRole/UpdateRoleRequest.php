<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 * @property string|null $Description
 * @property int<3600, 43200>|null $MaxSessionDuration
 * @property int<3600, 7776000>|null $MaxSigninSessionDuration
 * @property bool|null $ResetMaxSigninSessionDuration
 */
class UpdateRoleRequest extends Request
{
    /**
     * @param array{
     *     RoleName: string,
     *     Description?: string|null,
     *     MaxSessionDuration?: int<3600, 43200>|null,
     *     MaxSigninSessionDuration?: int<3600, 7776000>|null,
     *     ResetMaxSigninSessionDuration?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
