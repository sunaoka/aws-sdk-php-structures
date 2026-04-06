<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string $projectName
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $updatedDate
 * @property array<string, string>|null $tags
 */
class ProjectSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     projectName: string,
     *     createdDate: \Aws\Api\DateTimeResult,
     *     updatedDate: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
