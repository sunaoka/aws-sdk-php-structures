<?php

namespace Sunaoka\Aws\Structures\mgn\ListWaves;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountID
 * @property Shapes\ListWavesRequestFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListWavesRequest extends Request
{
    /**
     * @param array{
     *     accountID?: string|null,
     *     filters?: Shapes\ListWavesRequestFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
