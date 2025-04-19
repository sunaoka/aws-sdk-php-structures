<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assistantId
 * @property string $assistantArn
 * @property string $aiAgentId
 * @property string $aiAgentArn
 * @property string $name
 * @property 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE' $type
 * @property AIAgentConfiguration $configuration
 * @property \Aws\Api\DateTimeResult|null $modifiedTime
 * @property string|null $description
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property array<string, string>|null $tags
 * @property 'SYSTEM'|'CUSTOMER'|null $origin
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|null $status
 */
class AIAgentData extends Shape
{
    /**
     * @param array{
     *     assistantId: string,
     *     assistantArn: string,
     *     aiAgentId: string,
     *     aiAgentArn: string,
     *     name: string,
     *     type: 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE',
     *     configuration: AIAgentConfiguration,
     *     modifiedTime?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     visibilityStatus: 'SAVED'|'PUBLISHED',
     *     tags?: array<string, string>|null,
     *     origin?: 'SYSTEM'|'CUSTOMER'|null,
     *     status?: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
