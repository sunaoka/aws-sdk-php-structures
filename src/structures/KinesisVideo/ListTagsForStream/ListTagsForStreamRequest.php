<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListTagsForStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property string|null $StreamARN
 * @property string|null $StreamName
 */
class ListTagsForStreamRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     StreamARN?: string|null,
     *     StreamName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
