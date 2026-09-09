<?php

namespace Sunaoka\Aws\Structures\ElementalInference\DeleteFeedPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteFeedPolicyRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
