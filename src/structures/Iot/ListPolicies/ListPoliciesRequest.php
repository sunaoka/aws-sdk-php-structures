<?php

namespace Sunaoka\Aws\Structures\Iot\ListPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $marker
 * @property int $pageSize
 * @property bool $ascendingOrder
 */
class ListPoliciesRequest extends Request
{
    /**
     * @param array{
     *     marker?: string,
     *     pageSize?: int,
     *     ascendingOrder?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
