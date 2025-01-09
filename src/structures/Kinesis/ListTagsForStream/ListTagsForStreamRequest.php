<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListTagsForStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $ExclusiveStartTagKey
 * @property int<1, 50> $Limit
 * @property string $StreamARN
 */
class ListTagsForStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     ExclusiveStartTagKey?: string,
     *     Limit?: int<1, 50>,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
