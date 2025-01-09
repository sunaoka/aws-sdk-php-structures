<?php

namespace Sunaoka\Aws\Structures\Iot\ListRoleAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $pageSize
 * @property string $marker
 * @property bool $ascendingOrder
 */
class ListRoleAliasesRequest extends Request
{
    /**
     * @param array{
     *     pageSize?: int,
     *     marker?: string,
     *     ascendingOrder?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
