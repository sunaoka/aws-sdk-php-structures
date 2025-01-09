<?php

namespace Sunaoka\Aws\Structures\Iot\ListTargetsForPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property string $marker
 * @property int<1, 250> $pageSize
 */
class ListTargetsForPolicyRequest extends Request
{
    /**
     * @param array{
     *     policyName: string,
     *     marker?: string,
     *     pageSize?: int<1, 250>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
