<?php

namespace Sunaoka\Aws\Structures\Iam\ListAttachedUserPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $PathPrefix
 * @property string $Marker
 * @property int<1, 1000> $MaxItems
 */
class ListAttachedUserPoliciesRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
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
