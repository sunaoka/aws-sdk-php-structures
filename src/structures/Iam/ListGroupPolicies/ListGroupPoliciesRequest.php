<?php

namespace Sunaoka\Aws\Structures\Iam\ListGroupPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $Marker
 * @property int<1, 1000> $MaxItems
 */
class ListGroupPoliciesRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     Marker?: string,
     *     MaxItems?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
