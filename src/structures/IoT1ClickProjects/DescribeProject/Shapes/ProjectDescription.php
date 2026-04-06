<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\DescribeProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string $projectName
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $updatedDate
 * @property PlacementTemplate|null $placementTemplate
 * @property array<string, string>|null $tags
 */
class ProjectDescription extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     projectName: string,
     *     description?: string|null,
     *     createdDate: \Aws\Api\DateTimeResult,
     *     updatedDate: \Aws\Api\DateTimeResult,
     *     placementTemplate?: PlacementTemplate|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
