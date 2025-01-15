<?php

namespace Sunaoka\Aws\Structures\Iam\ListAttachedGroupPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string|null $PathPrefix
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListAttachedGroupPoliciesRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
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
