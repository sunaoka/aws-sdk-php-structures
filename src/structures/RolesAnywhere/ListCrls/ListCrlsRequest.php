<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ListCrls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $pageSize
 */
class ListCrlsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     pageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
