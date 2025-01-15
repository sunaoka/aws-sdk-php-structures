<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $detailedResultsLocation
 * @property string|null $jobArn
 * @property string|null $jobId
 * @property 'SENSITIVE_DATA_DISCOVERY_JOB'|'AUTOMATED_SENSITIVE_DATA_DISCOVERY'|null $originType
 * @property ClassificationResult|null $result
 */
class ClassificationDetails extends Shape
{
    /**
     * @param array{
     *     detailedResultsLocation?: string|null,
     *     jobArn?: string|null,
     *     jobId?: string|null,
     *     originType?: 'SENSITIVE_DATA_DISCOVERY_JOB'|'AUTOMATED_SENSITIVE_DATA_DISCOVERY'|null,
     *     result?: ClassificationResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
