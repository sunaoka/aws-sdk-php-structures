<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListTagsForStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property string $StreamARN
 * @property string $StreamName
 */
class ListTagsForStreamRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     StreamARN?: string,
     *     StreamName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
