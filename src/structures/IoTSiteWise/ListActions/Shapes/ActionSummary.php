<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actionId
 * @property string|null $actionDefinitionId
 * @property TargetResource|null $targetResource
 */
class ActionSummary extends Shape
{
    /**
     * @param array{
     *     actionId?: string|null,
     *     actionDefinitionId?: string|null,
     *     targetResource?: TargetResource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
