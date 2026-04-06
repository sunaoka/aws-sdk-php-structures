<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\DescribePlacement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $projectName
 * @property string $placementName
 * @property array<string, string> $attributes
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $updatedDate
 */
class PlacementDescription extends Shape
{
    /**
     * @param array{
     *     projectName: string,
     *     placementName: string,
     *     attributes: array<string, string>,
     *     createdDate: \Aws\Api\DateTimeResult,
     *     updatedDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
