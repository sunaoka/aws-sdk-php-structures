<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $aiAgentArn
 * @property string $aiAgentId
 * @property string $assistantArn
 * @property string $assistantId
 * @property AIAgentConfiguration|null $configuration
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $modifiedTime
 * @property string $name
 * @property 'SYSTEM'|'CUSTOMER'|null $origin
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|null $status
 * @property array<string, string>|null $tags
 * @property 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE' $type
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 */
class AIAgentSummary extends Shape
{
    /**
     * @param array{
     *     aiAgentArn: string,
     *     aiAgentId: string,
     *     assistantArn: string,
     *     assistantId: string,
     *     configuration?: AIAgentConfiguration|null,
     *     description?: string|null,
     *     modifiedTime?: \Aws\Api\DateTimeResult|null,
     *     name: string,
     *     origin?: 'SYSTEM'|'CUSTOMER'|null,
     *     status?: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|null,
     *     tags?: array<string, string>|null,
     *     type: 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE',
     *     visibilityStatus: 'SAVED'|'PUBLISHED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
