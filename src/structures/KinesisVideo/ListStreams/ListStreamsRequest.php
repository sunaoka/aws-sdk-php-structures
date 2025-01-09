<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10000> $MaxResults
 * @property string $NextToken
 * @property Shapes\StreamNameCondition $StreamNameCondition
 */
class ListStreamsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 10000>,
     *     NextToken?: string,
     *     StreamNameCondition?: Shapes\StreamNameCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
