<?php

namespace Sunaoka\Aws\Structures\Kinesis\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{ResourceARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
