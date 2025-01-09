<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListDataAutomationProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property 'DEVELOPMENT'|'LIVE'|'ALL' $projectStageFilter
 * @property Shapes\BlueprintFilter $blueprintFilter
 * @property 'SERVICE'|'ACCOUNT' $resourceOwner
 */
class ListDataAutomationProjectsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     projectStageFilter?: 'DEVELOPMENT'|'LIVE'|'ALL',
     *     blueprintFilter?: Shapes\BlueprintFilter,
     *     resourceOwner?: 'SERVICE'|'ACCOUNT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
