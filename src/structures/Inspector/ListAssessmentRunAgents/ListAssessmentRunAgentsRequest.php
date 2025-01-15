<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentRunAgents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentRunArn
 * @property Shapes\AgentFilter|null $filter
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListAssessmentRunAgentsRequest extends Request
{
    /**
     * @param array{
     *     assessmentRunArn: string,
     *     filter?: Shapes\AgentFilter|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
