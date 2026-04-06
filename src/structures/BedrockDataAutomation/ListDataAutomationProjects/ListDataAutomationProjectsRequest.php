<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListDataAutomationProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'DEVELOPMENT'|'LIVE'|'ALL'|null $projectStageFilter
 * @property Shapes\BlueprintFilter|null $blueprintFilter
 * @property 'SERVICE'|'ACCOUNT'|null $resourceOwner
 */
class ListDataAutomationProjectsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     projectStageFilter?: 'DEVELOPMENT'|'LIVE'|'ALL'|null,
     *     blueprintFilter?: Shapes\BlueprintFilter|null,
     *     resourceOwner?: 'SERVICE'|'ACCOUNT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
