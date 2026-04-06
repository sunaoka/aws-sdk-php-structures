<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListBlueprints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $blueprintArn
 * @property 'SERVICE'|'ACCOUNT'|null $resourceOwner
 * @property 'DEVELOPMENT'|'LIVE'|'ALL'|null $blueprintStageFilter
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\DataAutomationProjectFilter|null $projectFilter
 */
class ListBlueprintsRequest extends Request
{
    /**
     * @param array{
     *     blueprintArn?: string|null,
     *     resourceOwner?: 'SERVICE'|'ACCOUNT'|null,
     *     blueprintStageFilter?: 'DEVELOPMENT'|'LIVE'|'ALL'|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     projectFilter?: Shapes\DataAutomationProjectFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
