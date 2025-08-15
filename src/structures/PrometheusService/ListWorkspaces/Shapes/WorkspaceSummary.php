<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workspaceId
 * @property string|null $alias
 * @property string $arn
 * @property WorkspaceStatus $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property array<string, string>|null $tags
 * @property string|null $kmsKeyArn
 */
class WorkspaceSummary extends Shape
{
    /**
     * @param array{
     *     workspaceId: string,
     *     alias?: string|null,
     *     arn: string,
     *     status: WorkspaceStatus,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>|null,
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
