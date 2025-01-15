<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchSystemTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property int|null $revisionNumber
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class SystemTemplateSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     revisionNumber?: int|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
