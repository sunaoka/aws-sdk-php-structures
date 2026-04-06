<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\ListPlacements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $projectName
 * @property string $placementName
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $updatedDate
 */
class PlacementSummary extends Shape
{
    /**
     * @param array{
     *     projectName: string,
     *     placementName: string,
     *     createdDate: \Aws\Api\DateTimeResult,
     *     updatedDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
