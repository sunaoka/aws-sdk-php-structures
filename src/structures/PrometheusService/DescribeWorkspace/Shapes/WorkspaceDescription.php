<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $alias
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $kmsKeyArn
 * @property string|null $prometheusEndpoint
 * @property WorkspaceStatus $status
 * @property array<string, string>|null $tags
 * @property string $workspaceId
 */
class WorkspaceDescription extends Shape
{
    /**
     * @param array{
     *     alias?: string|null,
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     kmsKeyArn?: string|null,
     *     prometheusEndpoint?: string|null,
     *     status: WorkspaceStatus,
     *     tags?: array<string, string>|null,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
