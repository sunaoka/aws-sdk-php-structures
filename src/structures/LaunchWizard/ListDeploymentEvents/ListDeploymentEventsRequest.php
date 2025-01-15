<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListDeploymentEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListDeploymentEventsRequest extends Request
{
    /**
     * @param array{
     *     deploymentId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
