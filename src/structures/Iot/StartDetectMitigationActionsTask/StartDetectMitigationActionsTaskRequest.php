<?php

namespace Sunaoka\Aws\Structures\Iot\StartDetectMitigationActionsTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 * @property Shapes\DetectMitigationActionsTaskTarget $target
 * @property list<string> $actions
 * @property Shapes\ViolationEventOccurrenceRange $violationEventOccurrenceRange
 * @property bool $includeOnlyActiveViolations
 * @property bool $includeSuppressedAlerts
 * @property string $clientRequestToken
 */
class StartDetectMitigationActionsTaskRequest extends Request
{
    /**
     * @param array{
     *     taskId: string,
     *     target: Shapes\DetectMitigationActionsTaskTarget,
     *     actions: list<string>,
     *     violationEventOccurrenceRange?: Shapes\ViolationEventOccurrenceRange,
     *     includeOnlyActiveViolations?: bool,
     *     includeSuppressedAlerts?: bool,
     *     clientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
