<?php

namespace Sunaoka\Aws\Structures\Ecs\ListServiceDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $service
 * @property string|null $cluster
 * @property list<'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED'>|null $status
 * @property Shapes\CreatedAt|null $createdAt
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListServiceDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     service: string,
     *     cluster?: string|null,
     *     status?: list<'PENDING'|'SUCCESSFUL'|'STOPPED'|'STOP_REQUESTED'|'IN_PROGRESS'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_SUCCESSFUL'|'ROLLBACK_FAILED'>|null,
     *     createdAt?: Shapes\CreatedAt|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
