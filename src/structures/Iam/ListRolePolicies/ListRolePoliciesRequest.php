<?php

namespace Sunaoka\Aws\Structures\Iam\ListRolePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListRolePoliciesRequest extends Request
{
    /**
     * @param array{
     *     RoleName: string,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
