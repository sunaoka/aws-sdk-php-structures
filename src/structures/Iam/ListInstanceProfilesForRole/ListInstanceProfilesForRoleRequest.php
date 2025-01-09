<?php

namespace Sunaoka\Aws\Structures\Iam\ListInstanceProfilesForRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 * @property string $Marker
 * @property int<1, 1000> $MaxItems
 */
class ListInstanceProfilesForRoleRequest extends Request
{
    /**
     * @param array{
     *     RoleName: string,
     *     Marker?: string,
     *     MaxItems?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
