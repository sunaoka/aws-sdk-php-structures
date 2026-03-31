<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreateBacklogTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property Shapes\ReferenceInput|null $reference
 * @property 'INVESTIGATION'|'EVALUATION' $taskType
 * @property string $title
 * @property string|null $description
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'MINIMAL' $priority
 * @property string|null $clientToken
 */
class CreateBacklogTaskRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     reference?: Shapes\ReferenceInput|null,
     *     taskType: 'INVESTIGATION'|'EVALUATION',
     *     title: string,
     *     description?: string|null,
     *     priority: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'MINIMAL',
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
