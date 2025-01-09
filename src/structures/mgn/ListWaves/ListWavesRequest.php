<?php

namespace Sunaoka\Aws\Structures\mgn\ListWaves;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property Shapes\ListWavesRequestFilters $filters
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListWavesRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     filters?: Shapes\ListWavesRequestFilters,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
