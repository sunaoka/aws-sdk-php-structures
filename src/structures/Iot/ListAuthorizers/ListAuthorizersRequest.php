<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuthorizers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $pageSize
 * @property string $marker
 * @property bool $ascendingOrder
 * @property 'ACTIVE'|'INACTIVE' $status
 */
class ListAuthorizersRequest extends Request
{
    /**
     * @param array{
     *     pageSize?: int,
     *     marker?: string,
     *     ascendingOrder?: bool,
     *     status?: 'ACTIVE'|'INACTIVE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
