<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListDataAutomationProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $projectArn
 * @property 'DEVELOPMENT'|'LIVE' $projectStage
 * @property string $projectName
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class DataAutomationProjectSummary extends Shape
{
    /**
     * @param array{
     *     projectArn: string,
     *     projectStage?: 'DEVELOPMENT'|'LIVE',
     *     projectName?: string,
     *     creationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
