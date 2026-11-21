<?php

namespace Sunaoka\Aws\Structures\Textract\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProjectArn
 * @property string|null $ProjectName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class ProjectSummary extends Shape
{
    /**
     * @param array{
     *     ProjectArn: string,
     *     ProjectName?: string|null,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
