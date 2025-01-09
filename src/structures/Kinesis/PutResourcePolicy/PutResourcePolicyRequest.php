<?php

namespace Sunaoka\Aws\Structures\Kinesis\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property string $Policy
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     Policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
