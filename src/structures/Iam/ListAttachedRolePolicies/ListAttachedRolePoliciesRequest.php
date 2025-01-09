<?php

namespace Sunaoka\Aws\Structures\Iam\ListAttachedRolePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 * @property string $PathPrefix
 * @property string $Marker
 * @property int<1, 1000> $MaxItems
 */
class ListAttachedRolePoliciesRequest extends Request
{
    /**
     * @param array{
     *     RoleName: string,
     *     PathPrefix?: string,
     *     Marker?: string,
     *     MaxItems?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
