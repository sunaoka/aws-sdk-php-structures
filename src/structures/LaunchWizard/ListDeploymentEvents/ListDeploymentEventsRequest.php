<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListDeploymentEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListDeploymentEventsRequest extends Request
{
    /**
     * @param array{
     *     deploymentId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
