<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $projectName
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $updatedDate
 * @property array<string, string> $tags
 */
class ProjectSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     projectName: string,
     *     createdDate: \Aws\Api\DateTimeResult,
     *     updatedDate: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
