<?php

namespace Sunaoka\Aws\Structures\drs\StartRecoveryPlanExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPlanArn
 * @property 'DRILL'|'RECOVERY' $mode
 * @property string|null $clientToken
 * @property list<Shapes\RecoveryPlanExecutionSourceServer>|null $sourceServers
 * @property array<string, string>|null $tags
 */
class StartRecoveryPlanExecutionRequest extends Request
{
    /**
     * @param array{
     *     recoveryPlanArn: string,
     *     mode: 'DRILL'|'RECOVERY',
     *     clientToken?: string|null,
     *     sourceServers?: list<Shapes\RecoveryPlanExecutionSourceServer>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
