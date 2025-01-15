<?php

namespace Sunaoka\Aws\Structures\Iam\ListAttachedUserPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string|null $PathPrefix
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListAttachedUserPoliciesRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
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
