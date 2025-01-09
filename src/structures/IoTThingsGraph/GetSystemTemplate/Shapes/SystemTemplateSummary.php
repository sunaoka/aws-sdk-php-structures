<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetSystemTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property int $revisionNumber
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class SystemTemplateSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     arn?: string,
     *     revisionNumber?: int,
     *     createdAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
