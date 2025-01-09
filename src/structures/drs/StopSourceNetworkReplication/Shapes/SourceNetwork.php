<?php

namespace Sunaoka\Aws\Structures\drs\StopSourceNetworkReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $cfnStackName
 * @property RecoveryLifeCycle $lastRecovery
 * @property string $launchedVpcID
 * @property 'STOPPED'|'IN_PROGRESS'|'PROTECTED'|'ERROR' $replicationStatus
 * @property string $replicationStatusDetails
 * @property string $sourceAccountID
 * @property string $sourceNetworkID
 * @property string $sourceRegion
 * @property string $sourceVpcID
 * @property array<string, string> $tags
 */
class SourceNetwork extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     cfnStackName?: string,
     *     lastRecovery?: RecoveryLifeCycle,
     *     launchedVpcID?: string,
     *     replicationStatus?: 'STOPPED'|'IN_PROGRESS'|'PROTECTED'|'ERROR',
     *     replicationStatusDetails?: string,
     *     sourceAccountID?: string,
     *     sourceNetworkID?: string,
     *     sourceRegion?: string,
     *     sourceVpcID?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
