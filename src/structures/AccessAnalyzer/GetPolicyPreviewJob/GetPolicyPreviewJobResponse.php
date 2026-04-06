<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetPolicyPreviewJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property Shapes\PolicyPreviewJobParameters|null $jobParameters
 * @property Shapes\PolicyPreviewJobDetails|null $jobDetails
 * @property string $outputS3Uri
 */
class GetPolicyPreviewJobResponse extends Response
{
}
