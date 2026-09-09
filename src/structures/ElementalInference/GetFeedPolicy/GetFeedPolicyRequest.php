<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetFeedPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetFeedPolicyRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
