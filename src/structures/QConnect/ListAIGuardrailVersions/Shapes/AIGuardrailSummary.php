<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIGuardrailVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $aiGuardrailArn
 * @property string $aiGuardrailId
 * @property string $assistantArn
 * @property string $assistantId
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $modifiedTime
 * @property string $name
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|null $status
 * @property array<string, string>|null $tags
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
     *     description?: string|null,
     *     modifiedTime?: \Aws\Api\DateTimeResult|null,
     *     name: string,
     *     status?: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|null,
     *     tags?: array<string, string>|null,
     *     visibilityStatus: 'SAVED'|'PUBLISHED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
