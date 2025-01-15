<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobTemplateArn
 * @property string|null $jobTemplateId
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class JobTemplateSummary extends Shape
{
    /**
     * @param array{
     *     jobTemplateArn?: string|null,
     *     jobTemplateId?: string|null,
     *     description?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
