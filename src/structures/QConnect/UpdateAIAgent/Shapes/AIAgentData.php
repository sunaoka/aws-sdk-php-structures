<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $aiAgentArn
 * @property string $aiAgentId
 * @property string $assistantArn
 * @property string $assistantId
 * @property AIAgentConfiguration $configuration
 * @property string $description
 * @property \Aws\Api\DateTimeResult $modifiedTime
 * @property string $name
 * @property 'SYSTEM'|'CUSTOMER' $origin
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED' $status
 * @property array<string, string> $tags
 * @property 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE' $type
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 */
class AIAgentData extends Shape
{
    /**
     * @param array{
     *     aiAgentArn: string,
     *     aiAgentId: string,
     *     assistantArn: string,
     *     assistantId: string,
     *     configuration: AIAgentConfiguration,
     *     description?: string,
     *     modifiedTime?: \Aws\Api\DateTimeResult,
     *     name: string,
     *     origin?: 'SYSTEM'|'CUSTOMER',
     *     status?: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED',
     *     tags?: array<string, string>,
     *     type: 'MANUAL_SEARCH'|'ANSWER_RECOMMENDATION'|'SELF_SERVICE',
     *     visibilityStatus: 'SAVED'|'PUBLISHED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
