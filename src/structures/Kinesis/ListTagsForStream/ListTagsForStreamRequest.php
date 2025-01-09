<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListTagsForStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $ExclusiveStartTagKey
 * @property int $Limit
 * @property string $StreamARN
 */
class ListTagsForStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     ExclusiveStartTagKey?: string,
     *     Limit?: int,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
