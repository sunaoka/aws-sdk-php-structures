<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecycleExecutionResources;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $lifecycleExecutionId
 * @property Shapes\LifecycleExecutionState|null $lifecycleExecutionState
 * @property list<Shapes\LifecycleExecutionResource>|null $resources
 * @property string|null $nextToken
 */
class ListLifecycleExecutionResourcesResponse extends Response
{
}
