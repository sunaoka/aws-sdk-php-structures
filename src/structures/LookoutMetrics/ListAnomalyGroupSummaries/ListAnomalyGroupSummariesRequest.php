<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ListAnomalyGroupSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property int<0, 100> $SensitivityThreshold
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAnomalyGroupSummariesRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     SensitivityThreshold: int<0, 100>,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
