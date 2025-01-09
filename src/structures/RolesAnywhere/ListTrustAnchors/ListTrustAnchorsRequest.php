<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ListTrustAnchors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $pageSize
 */
class ListTrustAnchorsRequest extends Request
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
