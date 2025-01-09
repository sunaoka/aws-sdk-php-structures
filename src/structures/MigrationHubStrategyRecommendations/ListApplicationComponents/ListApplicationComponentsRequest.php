<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListApplicationComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NOT_DEFINED'|'APP_NAME'|'SERVER_ID'|'APP_TYPE'|'STRATEGY'|'DESTINATION'|'ANALYSIS_STATUS'|'ERROR_CATEGORY' $applicationComponentCriteria
 * @property string $filterValue
 * @property list<Shapes\Group> $groupIdFilter
 * @property int $maxResults
 * @property string $nextToken
 * @property 'ASC'|'DESC' $sort
 */
class ListApplicationComponentsRequest extends Request
{
    /**
     * @param array{
     *     applicationComponentCriteria?: 'NOT_DEFINED'|'APP_NAME'|'SERVER_ID'|'APP_TYPE'|'STRATEGY'|'DESTINATION'|'ANALYSIS_STATUS'|'ERROR_CATEGORY',
     *     filterValue?: string,
     *     groupIdFilter?: list<Shapes\Group>,
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
