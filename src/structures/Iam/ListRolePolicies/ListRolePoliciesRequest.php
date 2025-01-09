<?php

namespace Sunaoka\Aws\Structures\Iam\ListRolePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 * @property string $Marker
 * @property int $MaxItems
 */
class ListRolePoliciesRequest extends Request
{
    /**
     * @param array{
     *     RoleName: string,
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
