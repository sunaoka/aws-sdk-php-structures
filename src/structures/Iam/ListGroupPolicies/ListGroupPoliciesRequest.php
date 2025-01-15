<?php

namespace Sunaoka\Aws\Structures\Iam\ListGroupPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListGroupPoliciesRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
