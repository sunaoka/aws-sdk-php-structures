<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $filterValue
 * @property list<Shapes\Group>|null $groupIdFilter
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property 'NOT_DEFINED'|'OS_NAME'|'STRATEGY'|'DESTINATION'|'SERVER_ID'|'ANALYSIS_STATUS'|'ERROR_CATEGORY'|null $serverCriteria
 * @property 'ASC'|'DESC'|null $sort
 */
class ListServersRequest extends Request
{
    /**
     * @param array{
     *     filterValue?: string|null,
     *     groupIdFilter?: list<Shapes\Group>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     serverCriteria?: 'NOT_DEFINED'|'OS_NAME'|'STRATEGY'|'DESTINATION'|'SERVER_ID'|'ANALYSIS_STATUS'|'ERROR_CATEGORY'|null,
     *     sort?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
