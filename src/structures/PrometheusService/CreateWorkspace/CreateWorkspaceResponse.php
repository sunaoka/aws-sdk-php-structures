<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateWorkspace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string|null $kmsKeyArn
 * @property Shapes\WorkspaceStatus $status
 * @property array<string, string>|null $tags
 * @property string $workspaceId
 */
class CreateWorkspaceResponse extends Response
{
}
