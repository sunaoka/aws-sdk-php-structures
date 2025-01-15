<?php

namespace Sunaoka\Aws\Structures\Iot\ListPrincipalPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $principal
 * @property string|null $marker
 * @property int<1, 250>|null $pageSize
 * @property bool|null $ascendingOrder
 */
class ListPrincipalPoliciesRequest extends Request
{
    /**
     * @param array{
     *     principal: string,
     *     marker?: string|null,
     *     pageSize?: int<1, 250>|null,
     *     ascendingOrder?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
