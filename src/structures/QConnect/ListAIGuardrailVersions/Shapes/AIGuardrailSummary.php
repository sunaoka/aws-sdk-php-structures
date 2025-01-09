<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIGuardrailVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $aiGuardrailArn
 * @property string $aiGuardrailId
 * @property string $assistantArn
 * @property string $assistantId
 * @property string $description
 * @property \Aws\Api\DateTimeResult $modifiedTime
 * @property string $name
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED' $status
 * @property array<string, string> $tags
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 */
class AIGuardrailSummary extends Shape
{
    /**
     * @param array{
     *     aiGuardrailArn: string,
     *     aiGuardrailId: string,
     *     assistantArn: string,
     *     assistantId: string,
     *     description?: string,
     *     modifiedTime?: \Aws\Api\DateTimeResult,
     *     name: string,
     *     status?: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED',
     *     tags?: array<string, string>,
     *     visibilityStatus: 'SAVED'|'PUBLISHED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
