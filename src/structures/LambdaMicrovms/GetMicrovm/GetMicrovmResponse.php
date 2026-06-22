<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\GetMicrovm;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $microvmId
 * @property 'PENDING'|'RUNNING'|'SUSPENDING'|'SUSPENDED'|'TERMINATING'|'TERMINATED' $state
 * @property string $endpoint
 * @property string $imageArn
 * @property string $imageVersion
 * @property string|null $executionRoleArn
 * @property Shapes\IdlePolicy|null $idlePolicy
 * @property int $maximumDurationInSeconds
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult|null $terminatedAt
 * @property string|null $stateReason
 * @property list<string>|null $ingressNetworkConnectors
 * @property list<string>|null $egressNetworkConnectors
 */
class GetMicrovmResponse extends Response
{
}
