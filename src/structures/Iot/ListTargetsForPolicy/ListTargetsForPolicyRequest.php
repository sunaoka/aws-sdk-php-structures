<?php

namespace Sunaoka\Aws\Structures\Iot\ListTargetsForPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property string|null $marker
 * @property int<1, 250>|null $pageSize
 */
class ListTargetsForPolicyRequest extends Request
{
    /**
     * @param array{
     *     policyName: string,
     *     marker?: string|null,
     *     pageSize?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
