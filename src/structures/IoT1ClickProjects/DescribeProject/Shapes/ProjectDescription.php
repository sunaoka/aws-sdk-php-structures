<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\DescribeProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $projectName
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $updatedDate
 * @property PlacementTemplate $placementTemplate
 * @property array<string, string> $tags
 */
class ProjectDescription extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     projectName: string,
     *     description?: string,
     *     createdDate: \Aws\Api\DateTimeResult,
     *     updatedDate: \Aws\Api\DateTimeResult,
     *     placementTemplate?: PlacementTemplate,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
