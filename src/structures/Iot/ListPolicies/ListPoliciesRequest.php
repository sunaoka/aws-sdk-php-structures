<?php

namespace Sunaoka\Aws\Structures\Iot\ListPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $marker
 * @property int<1, 250>|null $pageSize
 * @property bool|null $ascendingOrder
 */
class ListPoliciesRequest extends Request
{
    /**
     * @param array{
     *     marker?: string|null,
     *     pageSize?: int<1, 250>|null,
     *     ascendingOrder?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
