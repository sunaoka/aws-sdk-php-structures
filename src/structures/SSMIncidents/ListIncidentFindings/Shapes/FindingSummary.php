<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListIncidentFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 */
class FindingSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     lastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
