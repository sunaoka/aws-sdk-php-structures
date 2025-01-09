<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\BatchGetFrameMetricData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property list<Shapes\TimestampStructure> $endTimes
 * @property list<Shapes\FrameMetricDatum> $frameMetricData
 * @property 'PT5M'|'PT1H'|'P1D' $resolution
 * @property \Aws\Api\DateTimeResult $startTime
 * @property array<string, list<Shapes\TimestampStructure>> $unprocessedEndTimes
 */
class BatchGetFrameMetricDataResponse extends Response
{
}
