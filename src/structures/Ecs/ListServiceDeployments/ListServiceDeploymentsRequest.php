<?php

namespace Sunaoka\Aws\Structures\Ecs\ListServiceDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $service
 * @property string $cluster
 * @property list<'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED'> $status
 * @property Shapes\CreatedAt $createdAt
 * @property string $nextToken
 * @property int $maxResults
 */
class ListServiceDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     service: string,
     *     cluster?: string,
     *     status?: list<'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED'>,
     *     createdAt?: Shapes\CreatedAt,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
