<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $blueprintArn
 * @property string|null $blueprintVersion
 * @property 'DEVELOPMENT'|'LIVE'|null $blueprintStage
 * @property string|null $blueprintName
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 */
class BlueprintSummary extends Shape
{
    /**
     * @param array{
     *     blueprintArn: string,
     *     blueprintVersion?: string|null,
     *     blueprintStage?: 'DEVELOPMENT'|'LIVE'|null,
     *     blueprintName?: string|null,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
