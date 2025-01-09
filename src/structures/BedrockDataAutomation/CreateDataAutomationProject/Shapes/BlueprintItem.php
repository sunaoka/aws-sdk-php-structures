<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $blueprintArn
 * @property string $blueprintVersion
 * @property 'DEVELOPMENT'|'LIVE' $blueprintStage
 */
class BlueprintItem extends Shape
{
    /**
     * @param array{
     *     blueprintArn: string,
     *     blueprintVersion?: string,
     *     blueprintStage?: 'DEVELOPMENT'|'LIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
