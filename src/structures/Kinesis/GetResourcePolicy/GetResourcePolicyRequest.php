<?php

namespace Sunaoka\Aws\Structures\Kinesis\GetResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 */
class GetResourcePolicyRequest extends Request
{
    /**
     * @param array{ResourceARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
