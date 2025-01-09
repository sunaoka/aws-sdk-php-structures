<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListMediaAnalysisJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property string $JobName
 * @property MediaAnalysisOperationsConfig $OperationsConfig
 * @property 'CREATED'|'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $Status
 * @property MediaAnalysisJobFailureDetails $FailureDetails
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property \Aws\Api\DateTimeResult $CompletionTimestamp
 * @property MediaAnalysisInput $Input
 * @property MediaAnalysisOutputConfig $OutputConfig
 * @property string $KmsKeyId
 * @property MediaAnalysisResults $Results
 * @property MediaAnalysisManifestSummary $ManifestSummary
 */
class MediaAnalysisJobDescription extends Shape
{
    /**
     * @param array{
     *     JobId: string,
     *     JobName?: string,
     *     OperationsConfig: MediaAnalysisOperationsConfig,
     *     Status: 'CREATED'|'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED',
     *     FailureDetails?: MediaAnalysisJobFailureDetails,
     *     CreationTimestamp: \Aws\Api\DateTimeResult,
     *     CompletionTimestamp?: \Aws\Api\DateTimeResult,
     *     Input: MediaAnalysisInput,
     *     OutputConfig: MediaAnalysisOutputConfig,
     *     KmsKeyId?: string,
     *     Results?: MediaAnalysisResults,
     *     ManifestSummary?: MediaAnalysisManifestSummary
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
