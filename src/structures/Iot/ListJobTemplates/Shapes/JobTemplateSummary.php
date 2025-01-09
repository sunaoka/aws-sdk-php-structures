<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobTemplateArn
 * @property string $jobTemplateId
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class JobTemplateSummary extends Shape
{
    /**
     * @param array{
     *     jobTemplateArn?: string,
     *     jobTemplateId?: string,
     *     description?: string,
     *     createdAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
