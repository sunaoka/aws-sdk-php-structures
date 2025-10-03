<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $assistantId
 * @property string $assistantArn
 * @property string $aiAgentId
 * @property 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER' $type
 * @property string $aiAgentArn
 * @property \Aws\Api\DateTimeResult|null $modifiedTime
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property AIAgentConfiguration|null $configuration
 * @property 'SYSTEM'|'CUSTOMER'|null $origin
 * @property string|null $description
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|null $status
 * @property array<string, string>|null $tags
 */
class AIAgentSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     assistantId: string,
     *     assistantArn: string,
     *     aiAgentId: string,
     *     type: 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE'|'EMAIL_RESPONSE'|'EMAIL_OVERVIEW'|'EMAIL_GENERATIVE_ANSWER',
     *     aiAgentArn: string,
     *     modifiedTime?: \Aws\Api\DateTimeResult|null,
     *     visibilityStatus: 'SAVED'|'PUBLISHED',
     *     configuration?: AIAgentConfiguration|null,
     *     origin?: 'SYSTEM'|'CUSTOMER'|null,
     *     description?: string|null,
     *     status?: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
