<?php

namespace Sunaoka\Aws\Structures\Iot\StartDetectMitigationActionsTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 * @property Shapes\DetectMitigationActionsTaskTarget $target
 * @property list<string> $actions
 * @property Shapes\ViolationEventOccurrenceRange|null $violationEventOccurrenceRange
 * @property bool|null $includeOnlyActiveViolations
 * @property bool|null $includeSuppressedAlerts
 * @property string $clientRequestToken
 */
class StartDetectMitigationActionsTaskRequest extends Request
{
    /**
     * @param array{
     *     taskId: string,
     *     target: Shapes\DetectMitigationActionsTaskTarget,
     *     actions: list<string>,
     *     violationEventOccurrenceRange?: Shapes\ViolationEventOccurrenceRange|null,
     *     includeOnlyActiveViolations?: bool|null,
     *     includeSuppressedAlerts?: bool|null,
     *     clientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
