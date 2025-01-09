<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetMediaAnalysisJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property string $JobName
 * @property Shapes\MediaAnalysisOperationsConfig $OperationsConfig
 * @property 'CREATED'|'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $Status
 * @property Shapes\MediaAnalysisJobFailureDetails $FailureDetails
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property \Aws\Api\DateTimeResult $CompletionTimestamp
 * @property Shapes\MediaAnalysisInput $Input
 * @property Shapes\MediaAnalysisOutputConfig $OutputConfig
 * @property string $KmsKeyId
 * @property Shapes\MediaAnalysisResults $Results
 * @property Shapes\MediaAnalysisManifestSummary $ManifestSummary
 */
class GetMediaAnalysisJobResponse extends Response
{
}
