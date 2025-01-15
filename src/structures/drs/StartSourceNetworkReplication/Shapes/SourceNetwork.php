<?php

namespace Sunaoka\Aws\Structures\drs\StartSourceNetworkReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $cfnStackName
 * @property RecoveryLifeCycle|null $lastRecovery
 * @property string|null $launchedVpcID
 * @property 'STOPPED'|'IN_PROGRESS'|'PROTECTED'|'ERROR'|null $replicationStatus
 * @property string|null $replicationStatusDetails
 * @property string|null $sourceAccountID
 * @property string|null $sourceNetworkID
 * @property string|null $sourceRegion
 * @property string|null $sourceVpcID
 * @property array<string, string>|null $tags
 */
class SourceNetwork extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     cfnStackName?: string|null,
     *     lastRecovery?: RecoveryLifeCycle|null,
     *     launchedVpcID?: string|null,
     *     replicationStatus?: 'STOPPED'|'IN_PROGRESS'|'PROTECTED'|'ERROR'|null,
     *     replicationStatusDetails?: string|null,
     *     sourceAccountID?: string|null,
     *     sourceNetworkID?: string|null,
     *     sourceRegion?: string|null,
     *     sourceVpcID?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
