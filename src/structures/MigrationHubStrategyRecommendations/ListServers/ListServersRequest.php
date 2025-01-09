<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $filterValue
 * @property list<Shapes\Group> $groupIdFilter
 * @property int $maxResults
 * @property string $nextToken
 * @property 'NOT_DEFINED'|'OS_NAME'|'STRATEGY'|'DESTINATION'|'SERVER_ID'|'ANALYSIS_STATUS'|'ERROR_CATEGORY' $serverCriteria
 * @property 'ASC'|'DESC' $sort
 */
class ListServersRequest extends Request
{
    /**
     * @param array{
     *     filterValue?: string,
     *     groupIdFilter?: list<Shapes\Group>,
     *     maxResults?: int,
     *     nextToken?: string,
     *     serverCriteria?: 'NOT_DEFINED'|'OS_NAME'|'STRATEGY'|'DESTINATION'|'SERVER_ID'|'ANALYSIS_STATUS'|'ERROR_CATEGORY',
     *     sort?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
