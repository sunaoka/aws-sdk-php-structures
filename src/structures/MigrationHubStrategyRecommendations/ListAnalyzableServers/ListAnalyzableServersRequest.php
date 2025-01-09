<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListAnalyzableServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property 'ASC'|'DESC' $sort
 */
class ListAnalyzableServersRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     sort?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
