<?php

namespace Sunaoka\Aws\Structures\Iot\ListAttachedPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $target
 * @property bool|null $recursive
 * @property string|null $marker
 * @property int<1, 250>|null $pageSize
 */
class ListAttachedPoliciesRequest extends Request
{
    /**
     * @param array{
     *     target: string,
     *     recursive?: bool|null,
     *     marker?: string|null,
     *     pageSize?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
