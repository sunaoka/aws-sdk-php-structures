<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListDataAutomationProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $projectArn
 * @property 'DEVELOPMENT'|'LIVE'|null $projectStage
 * @property 'ASYNC'|'SYNC'|null $projectType
 * @property string|null $projectName
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class DataAutomationProjectSummary extends Shape
{
    /**
     * @param array{
     *     projectArn: string,
     *     projectStage?: 'DEVELOPMENT'|'LIVE'|null,
     *     projectType?: 'ASYNC'|'SYNC'|null,
     *     projectName?: string|null,
     *     creationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
