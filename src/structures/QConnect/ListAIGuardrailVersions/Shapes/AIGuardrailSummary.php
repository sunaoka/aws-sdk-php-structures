<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIGuardrailVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $assistantId
 * @property string $assistantArn
 * @property string $aiGuardrailId
 * @property string $aiGuardrailArn
 * @property \Aws\Api\DateTimeResult|null $modifiedTime
 * @property 'SAVED'|'PUBLISHED' $visibilityStatus
 * @property string|null $description
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|null $status
 * @property array<string, string>|null $tags
 */
class AIGuardrailSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     assistantId: string,
     *     assistantArn: string,
     *     aiGuardrailId: string,
     *     aiGuardrailArn: string,
     *     modifiedTime?: \Aws\Api\DateTimeResult|null,
     *     visibilityStatus: 'SAVED'|'PUBLISHED',
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
