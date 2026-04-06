<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetMediaAnalysisJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property string|null $JobName
 * @property Shapes\MediaAnalysisOperationsConfig $OperationsConfig
 * @property 'CREATED'|'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $Status
 * @property Shapes\MediaAnalysisJobFailureDetails|null $FailureDetails
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property \Aws\Api\DateTimeResult|null $CompletionTimestamp
 * @property Shapes\MediaAnalysisInput $Input
 * @property Shapes\MediaAnalysisOutputConfig $OutputConfig
 * @property string|null $KmsKeyId
 * @property Shapes\MediaAnalysisResults|null $Results
 * @property Shapes\MediaAnalysisManifestSummary|null $ManifestSummary
 */
class GetMediaAnalysisJobResponse extends Response
{
}
