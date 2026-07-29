<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property WorkspaceStatus $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class WorkspaceSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     arn: string,
     *     status: WorkspaceStatus,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
