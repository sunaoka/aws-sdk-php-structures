<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecycleExecutionResources;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $lifecycleExecutionId
 * @property Shapes\LifecycleExecutionState $lifecycleExecutionState
 * @property list<Shapes\LifecycleExecutionResource> $resources
 * @property string $nextToken
 */
class ListLifecycleExecutionResourcesResponse extends Response
{
}
