<?php

namespace Sunaoka\Aws\Structures\mgn\ListWaves;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountID
 * @property Shapes\ListWavesRequestFilters $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListWavesRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string,
     *     filters?: Shapes\ListWavesRequestFilters,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
