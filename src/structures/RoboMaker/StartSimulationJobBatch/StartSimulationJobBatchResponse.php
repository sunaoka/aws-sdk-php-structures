<?php

namespace Sunaoka\Aws\Structures\RoboMaker\StartSimulationJobBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property 'Pending'|'InProgress'|'Failed'|'Completed'|'Canceled'|'Canceling'|'Completing'|'TimingOut'|'TimedOut' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $clientRequestToken
 * @property Shapes\BatchPolicy $batchPolicy
 * @property 'InternalServiceError' $failureCode
 * @property string $failureReason
 * @property list<Shapes\FailedCreateSimulationJobRequest> $failedRequests
 * @property list<Shapes\SimulationJobRequest> $pendingRequests
 * @property list<Shapes\SimulationJobSummary> $createdRequests
 * @property array<string, string> $tags
 */
class StartSimulationJobBatchResponse extends Response
{
}
