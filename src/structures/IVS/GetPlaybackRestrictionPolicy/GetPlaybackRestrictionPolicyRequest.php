<?php

namespace Sunaoka\Aws\Structures\IVS\GetPlaybackRestrictionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetPlaybackRestrictionPolicyRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
