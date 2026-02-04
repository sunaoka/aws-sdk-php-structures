<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property string|null $StreamId
 */
class ListTagsForResourceRequest extends Request
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
