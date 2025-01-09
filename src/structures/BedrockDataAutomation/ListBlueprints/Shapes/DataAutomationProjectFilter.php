<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $projectArn
 * @property 'DEVELOPMENT'|'LIVE' $projectStage
 */
class DataAutomationProjectFilter extends Shape
{
    /**
     * @param array{
     *     projectArn: string,
     *     projectStage?: 'DEVELOPMENT'|'LIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
