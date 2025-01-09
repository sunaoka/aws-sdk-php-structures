<?php

namespace Sunaoka\Aws\Structures\Iot\ListPrincipalPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $principal
 * @property string $marker
 * @property int<1, 250> $pageSize
 * @property bool $ascendingOrder
 */
class ListPrincipalPoliciesRequest extends Request
{
    /**
     * @param array{
     *     principal: string,
     *     marker?: string,
     *     pageSize?: int<1, 250>,
     *     ascendingOrder?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
