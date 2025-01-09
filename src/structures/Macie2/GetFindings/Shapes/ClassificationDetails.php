<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $detailedResultsLocation
 * @property string $jobArn
 * @property string $jobId
 * @property 'SENSITIVE_DATA_DISCOVERY_JOB'|'AUTOMATED_SENSITIVE_DATA_DISCOVERY' $originType
 * @property ClassificationResult $result
 */
class ClassificationDetails extends Shape
{
    /**
     * @param array{
     *     detailedResultsLocation?: string,
     *     jobArn?: string,
     *     jobId?: string,
     *     originType?: 'SENSITIVE_DATA_DISCOVERY_JOB'|'AUTOMATED_SENSITIVE_DATA_DISCOVERY',
     *     result?: ClassificationResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
