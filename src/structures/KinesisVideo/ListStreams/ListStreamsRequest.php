<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property Shapes\StreamNameCondition $StreamNameCondition
 */
class ListStreamsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     StreamNameCondition?: Shapes\StreamNameCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
