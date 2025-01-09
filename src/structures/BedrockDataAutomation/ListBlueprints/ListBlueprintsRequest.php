<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListBlueprints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $blueprintArn
 * @property 'SERVICE'|'ACCOUNT' $resourceOwner
 * @property 'DEVELOPMENT'|'LIVE'|'ALL' $blueprintStageFilter
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\DataAutomationProjectFilter $projectFilter
 */
class ListBlueprintsRequest extends Request
{
    /**
     * @param array{
     *     blueprintArn?: string,
     *     resourceOwner?: 'SERVICE'|'ACCOUNT',
     *     blueprintStageFilter?: 'DEVELOPMENT'|'LIVE'|'ALL',
     *     maxResults?: int,
     *     nextToken?: string,
     *     projectFilter?: Shapes\DataAutomationProjectFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
