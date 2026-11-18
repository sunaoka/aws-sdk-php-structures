<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListAgentInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $applicationName
 * @property string|null $batchEvaluationId
 * @property 'ACTIVE'|'ARCHIVED'|null $archiveStatus
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListAgentInsightsRequest extends Request
{
    /**
     * @param array{
     *     applicationName?: string|null,
     *     batchEvaluationId?: string|null,
     *     archiveStatus?: 'ACTIVE'|'ARCHIVED'|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
