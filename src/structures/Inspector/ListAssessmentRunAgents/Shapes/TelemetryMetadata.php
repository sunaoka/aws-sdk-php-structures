<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentRunAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $messageType
 * @property int $count
 * @property int $dataSize
 */
class TelemetryMetadata extends Shape
{
    /**
     * @param array{
     *     messageType: string,
     *     count: int,
     *     dataSize?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
