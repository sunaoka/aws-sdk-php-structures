<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListMultiplexPrograms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $MaxResults
 * @property string $MultiplexId
 * @property string $NextToken
 */
class ListMultiplexProgramsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>,
     *     MultiplexId: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
