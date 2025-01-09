<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $alias
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $kmsKeyArn
 * @property string $prometheusEndpoint
 * @property WorkspaceStatus $status
 * @property array<string, string> $tags
 * @property string $workspaceId
 */
class WorkspaceDescription extends Shape
{
    /**
     * @param array{
     *     alias?: string,
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     kmsKeyArn?: string,
     *     prometheusEndpoint?: string,
     *     status: WorkspaceStatus,
     *     tags?: array<string, string>,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
