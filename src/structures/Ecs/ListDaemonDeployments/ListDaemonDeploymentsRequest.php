<?php

namespace Sunaoka\Aws\Structures\Ecs\ListDaemonDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $daemonArn
 * @property list<'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED'>|null $status
 * @property Shapes\CreatedAt|null $createdAt
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListDaemonDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     daemonArn: string,
     *     status?: list<'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED'>|null,
     *     createdAt?: Shapes\CreatedAt|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
