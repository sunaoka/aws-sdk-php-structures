<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10000>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\StreamNameCondition|null $StreamNameCondition
 */
class ListStreamsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 10000>|null,
     *     NextToken?: string|null,
     *     StreamNameCondition?: Shapes\StreamNameCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
