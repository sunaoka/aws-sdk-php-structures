<?php

namespace Sunaoka\Aws\Structures\Iam\ListAttachedRolePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 * @property string|null $PathPrefix
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListAttachedRolePoliciesRequest extends Request
{
    /**
     * @param array{
     *     RoleName: string,
     *     PathPrefix?: string|null,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
