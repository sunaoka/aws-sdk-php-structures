<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $blueprintArn
 * @property string $blueprintVersion
 * @property 'DEVELOPMENT'|'LIVE' $blueprintStage
 * @property string $blueprintName
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 */
class BlueprintSummary extends Shape
{
    /**
     * @param array{
     *     blueprintArn: string,
     *     blueprintVersion?: string,
     *     blueprintStage?: 'DEVELOPMENT'|'LIVE',
     *     blueprintName?: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
