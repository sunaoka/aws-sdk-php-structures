<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property 'active'|'archived' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $archivedAt
 * @property ProjectDataRetention $dataRetention
 */
class ProjectSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     name: string,
     *     status: 'active'|'archived',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     archivedAt?: \Aws\Api\DateTimeResult|null,
     *     dataRetention: ProjectDataRetention
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
