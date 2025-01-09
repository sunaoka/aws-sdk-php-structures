<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateWorkspace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $kmsKeyArn
 * @property Shapes\WorkspaceStatus $status
 * @property array<string, string> $tags
 * @property string $workspaceId
 */
class CreateWorkspaceResponse extends Response
{
}
