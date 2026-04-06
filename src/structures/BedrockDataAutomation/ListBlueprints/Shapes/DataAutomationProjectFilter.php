<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $projectArn
 * @property 'DEVELOPMENT'|'LIVE'|null $projectStage
 */
class DataAutomationProjectFilter extends Shape
{
    /**
     * @param array{
     *     projectArn: string,
     *     projectStage?: 'DEVELOPMENT'|'LIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
