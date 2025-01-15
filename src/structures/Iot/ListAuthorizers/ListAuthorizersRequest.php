<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuthorizers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 250>|null $pageSize
 * @property string|null $marker
 * @property bool|null $ascendingOrder
 * @property 'ACTIVE'|'INACTIVE'|null $status
 */
class ListAuthorizersRequest extends Request
{
    /**
     * @param array{
     *     pageSize?: int<1, 250>|null,
     *     marker?: string|null,
     *     ascendingOrder?: bool|null,
     *     status?: 'ACTIVE'|'INACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
