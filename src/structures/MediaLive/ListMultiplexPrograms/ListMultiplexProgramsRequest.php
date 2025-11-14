<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListMultiplexPrograms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $MaxResults
 * @property string $MultiplexId
 * @property string|null $NextToken
 */
class ListMultiplexProgramsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int|null,
     *     MultiplexId: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
