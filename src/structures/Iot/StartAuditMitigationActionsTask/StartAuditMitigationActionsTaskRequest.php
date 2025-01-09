<?php

namespace Sunaoka\Aws\Structures\Iot\StartAuditMitigationActionsTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 * @property Shapes\AuditMitigationActionsTaskTarget $target
 * @property array<string, list<string>> $auditCheckToActionsMapping
 * @property string $clientRequestToken
 */
class StartAuditMitigationActionsTaskRequest extends Request
{
    /**
     * @param array{
     *     taskId: string,
     *     target: Shapes\AuditMitigationActionsTaskTarget,
     *     auditCheckToActionsMapping: array<string, list<string>>,
     *     clientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
