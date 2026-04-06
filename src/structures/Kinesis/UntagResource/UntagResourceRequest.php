<?php

namespace Sunaoka\Aws\Structures\Kinesis\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TagKeys
 * @property string $ResourceARN
 * @property string|null $StreamId
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     TagKeys: list<string>,
     *     ResourceARN: string,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
