<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListDeploymentSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListDeploymentSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     deploymentIdentifier: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
