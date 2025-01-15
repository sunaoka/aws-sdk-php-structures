<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListDataAutomationProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $blueprintArn
 * @property string|null $blueprintVersion
 * @property 'DEVELOPMENT'|'LIVE'|null $blueprintStage
 */
class BlueprintFilter extends Shape
{
    /**
     * @param array{
     *     blueprintArn: string,
     *     blueprintVersion?: string|null,
     *     blueprintStage?: 'DEVELOPMENT'|'LIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
