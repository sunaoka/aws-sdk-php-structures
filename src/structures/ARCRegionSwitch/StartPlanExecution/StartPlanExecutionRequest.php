<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\StartPlanExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $planArn
 * @property string $targetRegion
 * @property 'activate'|'deactivate'|'postRecovery' $action
 * @property 'graceful'|'ungraceful'|null $mode
 * @property string|null $comment
 * @property string|null $latestVersion
 * @property string|null $recoveryExecutionId
 */
class StartPlanExecutionRequest extends Request
{
    /**
     * @param array{
     *     planArn: string,
     *     targetRegion: string,
     *     action: 'activate'|'deactivate'|'postRecovery',
     *     mode?: 'graceful'|'ungraceful'|null,
     *     comment?: string|null,
     *     latestVersion?: string|null,
     *     recoveryExecutionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
