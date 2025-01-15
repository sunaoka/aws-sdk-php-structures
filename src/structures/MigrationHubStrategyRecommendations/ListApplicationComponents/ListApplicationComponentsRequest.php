<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListApplicationComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NOT_DEFINED'|'APP_NAME'|'SERVER_ID'|'APP_TYPE'|'STRATEGY'|'DESTINATION'|'ANALYSIS_STATUS'|'ERROR_CATEGORY'|null $applicationComponentCriteria
 * @property string|null $filterValue
 * @property list<Shapes\Group>|null $groupIdFilter
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property 'ASC'|'DESC'|null $sort
 */
class ListApplicationComponentsRequest extends Request
{
    /**
     * @param array{
     *     applicationComponentCriteria?: 'NOT_DEFINED'|'APP_NAME'|'SERVER_ID'|'APP_TYPE'|'STRATEGY'|'DESTINATION'|'ANALYSIS_STATUS'|'ERROR_CATEGORY'|null,
     *     filterValue?: string|null,
     *     groupIdFilter?: list<Shapes\Group>|null,
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
