<?php

namespace Sunaoka\Aws\Structures\Iot\ListAttachedPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $target
 * @property bool $recursive
 * @property string $marker
 * @property int<1, 250> $pageSize
 */
class ListAttachedPoliciesRequest extends Request
{
    /**
     * @param array{
     *     target: string,
     *     recursive?: bool,
     *     marker?: string,
     *     pageSize?: int<1, 250>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
