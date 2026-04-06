<?php

namespace Sunaoka\Aws\Structures\IVS\DeletePlaybackRestrictionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeletePlaybackRestrictionPolicyRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
