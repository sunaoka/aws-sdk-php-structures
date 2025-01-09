<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionId
 * @property string $actionDefinitionId
 * @property TargetResource $targetResource
 */
class ActionSummary extends Shape
{
    /**
     * @param array{
     *     actionId?: string,
     *     actionDefinitionId?: string,
     *     targetResource?: TargetResource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
