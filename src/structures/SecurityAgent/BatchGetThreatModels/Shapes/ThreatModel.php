<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetThreatModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $threatModelId
 * @property string $agentSpaceId
 * @property string $title
 * @property string|null $description
 * @property Assets $assets
 * @property list<DocumentInfo>|null $scopeDocs
 * @property string|null $serviceRole
 * @property CloudWatchLog|null $logConfig
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ThreatModel extends Shape
{
    /**
     * @param array{
     *     threatModelId: string,
     *     agentSpaceId: string,
     *     title: string,
     *     description?: string|null,
     *     assets: Assets,
     *     scopeDocs?: list<DocumentInfo>|null,
     *     serviceRole?: string|null,
     *     logConfig?: CloudWatchLog|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
