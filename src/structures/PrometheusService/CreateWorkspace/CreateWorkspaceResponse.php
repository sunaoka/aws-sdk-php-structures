<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateWorkspace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workspaceId
 * @property string $arn
 * @property Shapes\WorkspaceStatus $status
 * @property array<string, string>|null $tags
 */
class CreateWorkspaceResponse extends Response
{
}
