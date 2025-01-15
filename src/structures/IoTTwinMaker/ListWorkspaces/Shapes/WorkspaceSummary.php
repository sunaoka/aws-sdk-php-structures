<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workspaceId
 * @property string $arn
 * @property string|null $description
 * @property list<string>|null $linkedServices
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $updateDateTime
 */
class WorkspaceSummary extends Shape
{
    /**
     * @param array{
     *     workspaceId: string,
     *     arn: string,
     *     description?: string|null,
     *     linkedServices?: list<string>|null,
     *     creationDateTime: \Aws\Api\DateTimeResult,
     *     updateDateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
