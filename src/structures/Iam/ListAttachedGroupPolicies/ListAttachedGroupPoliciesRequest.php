<?php

namespace Sunaoka\Aws\Structures\Iam\ListAttachedGroupPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $PathPrefix
 * @property string $Marker
 * @property int $MaxItems
 */
class ListAttachedGroupPoliciesRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     PathPrefix?: string,
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
