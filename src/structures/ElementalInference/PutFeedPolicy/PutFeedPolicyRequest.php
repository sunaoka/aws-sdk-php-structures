<?php

namespace Sunaoka\Aws\Structures\ElementalInference\PutFeedPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $policy
 */
class PutFeedPolicyRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
