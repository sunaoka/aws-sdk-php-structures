<?php

namespace Sunaoka\Aws\Structures\Omics\GetBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $uuid
 * @property string|null $name
 * @property 'CREATING'|'PENDING'|'SUBMITTING'|'INPROGRESS'|'STOPPING'|'CANCELLED'|'FAILED'|'PROCESSED'|'RUNS_DELETING'|'RUNS_DELETED'|null $status
 * @property array<string, string>|null $tags
 * @property int|null $totalRuns
 * @property Shapes\DefaultRunSetting|null $defaultRunSetting
 * @property Shapes\SubmissionSummary|null $submissionSummary
 * @property Shapes\RunSummary|null $runSummary
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $submittedTime
 * @property \Aws\Api\DateTimeResult|null $processedTime
 * @property \Aws\Api\DateTimeResult|null $failedTime
 * @property string|null $failureReason
 */
class GetBatchResponse extends Response
{
}
