<?php

namespace Sunaoka\Aws\Structures\Iot\ListRoleAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 250>|null $pageSize
 * @property string|null $marker
 * @property bool|null $ascendingOrder
 */
class ListRoleAliasesRequest extends Request
{
    /**
     * @param array{
     *     pageSize?: int<1, 250>|null,
     *     marker?: string|null,
     *     ascendingOrder?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
