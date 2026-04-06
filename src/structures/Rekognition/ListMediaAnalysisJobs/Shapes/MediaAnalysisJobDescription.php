<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListMediaAnalysisJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property string|null $JobName
 * @property MediaAnalysisOperationsConfig $OperationsConfig
 * @property 'CREATED'|'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $Status
 * @property MediaAnalysisJobFailureDetails|null $FailureDetails
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property \Aws\Api\DateTimeResult|null $CompletionTimestamp
 * @property MediaAnalysisInput $Input
 * @property MediaAnalysisOutputConfig $OutputConfig
 * @property string|null $KmsKeyId
 * @property MediaAnalysisResults|null $Results
 * @property MediaAnalysisManifestSummary|null $ManifestSummary
 */
class MediaAnalysisJobDescription extends Shape
{
    /**
     * @param array{
     *     JobId: string,
     *     JobName?: string|null,
     *     OperationsConfig: MediaAnalysisOperationsConfig,
     *     Status: 'CREATED'|'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED',
     *     FailureDetails?: MediaAnalysisJobFailureDetails|null,
     *     CreationTimestamp: \Aws\Api\DateTimeResult,
     *     CompletionTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Input: MediaAnalysisInput,
     *     OutputConfig: MediaAnalysisOutputConfig,
     *     KmsKeyId?: string|null,
     *     Results?: MediaAnalysisResults|null,
     *     ManifestSummary?: MediaAnalysisManifestSummary|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
