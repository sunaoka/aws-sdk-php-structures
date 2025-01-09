<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\BatchGetIncidentFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property FindingDetails $details
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 */
class Finding extends Shape
{
    /**
     * @param array{
     *     creationTime: \Aws\Api\DateTimeResult,
     *     details?: FindingDetails,
     *     id: string,
     *     lastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
