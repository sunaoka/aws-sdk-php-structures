<?php

namespace Sunaoka\Aws\Structures\Kinesis\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property string|null $StreamId
 * @property string $Policy
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     StreamId?: string|null,
     *     Policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
