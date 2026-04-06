<?php

namespace Sunaoka\Aws\Structures\RoboMaker\StartSimulationJobBatch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property 'Pending'|'InProgress'|'Failed'|'Completed'|'Canceled'|'Canceling'|'Completing'|'TimingOut'|'TimedOut'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $clientRequestToken
 * @property Shapes\BatchPolicy|null $batchPolicy
 * @property 'InternalServiceError'|null $failureCode
 * @property string|null $failureReason
 * @property list<Shapes\FailedCreateSimulationJobRequest>|null $failedRequests
 * @property list<Shapes\SimulationJobRequest>|null $pendingRequests
 * @property list<Shapes\SimulationJobSummary>|null $createdRequests
 * @property array<string, string>|null $tags
 */
class StartSimulationJobBatchResponse extends Response
{
}
