<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListTagsForStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string|null $ExclusiveStartTagKey
 * @property int<1, 50>|null $Limit
 * @property string|null $StreamARN
 * @property string|null $StreamId
 */
class ListTagsForStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     ExclusiveStartTagKey?: string|null,
     *     Limit?: int<1, 50>|null,
     *     StreamARN?: string|null,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
