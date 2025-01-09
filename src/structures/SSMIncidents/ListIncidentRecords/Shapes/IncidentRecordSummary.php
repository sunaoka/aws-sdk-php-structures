<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListIncidentRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property int $impact
 * @property IncidentRecordSource $incidentRecordSource
 * @property \Aws\Api\DateTimeResult $resolvedTime
 * @property 'OPEN'|'RESOLVED' $status
 * @property string $title
 */
class IncidentRecordSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     impact: int,
     *     incidentRecordSource: IncidentRecordSource,
     *     resolvedTime?: \Aws\Api\DateTimeResult,
     *     status: 'OPEN'|'RESOLVED',
     *     title: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
