<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListAnalyzableServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property 'ASC'|'DESC'|null $sort
 */
class ListAnalyzableServersRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     sort?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
