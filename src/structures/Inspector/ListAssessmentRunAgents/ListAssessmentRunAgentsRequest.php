<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentRunAgents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentRunArn
 * @property Shapes\AgentFilter $filter
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAssessmentRunAgentsRequest extends Request
{
    /**
     * @param array{
     *     assessmentRunArn: string,
     *     filter?: Shapes\AgentFilter,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
