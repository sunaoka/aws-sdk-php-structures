<?php

namespace Sunaoka\Aws\Structures\Kinesis\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property string|null $StreamId
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
