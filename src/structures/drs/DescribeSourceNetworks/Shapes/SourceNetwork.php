<?php

namespace Sunaoka\Aws\Structures\drs\DescribeSourceNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceNetworkID
 * @property string|null $sourceVpcID
 * @property string|null $arn
 * @property array<string, string>|null $tags
 * @property 'STOPPED'|'IN_PROGRESS'|'PROTECTED'|'ERROR'|null $replicationStatus
 * @property string|null $replicationStatusDetails
 * @property string|null $cfnStackName
 * @property string|null $sourceRegion
 * @property string|null $sourceAccountID
 * @property RecoveryLifeCycle|null $lastRecovery
 * @property string|null $launchedVpcID
 */
class SourceNetwork extends Shape
{
    /**
     * @param array{
     *     sourceNetworkID?: string|null,
     *     sourceVpcID?: string|null,
     *     arn?: string|null,
     *     tags?: array<string, string>|null,
     *     replicationStatus?: 'STOPPED'|'IN_PROGRESS'|'PROTECTED'|'ERROR'|null,
     *     replicationStatusDetails?: string|null,
     *     cfnStackName?: string|null,
     *     sourceRegion?: string|null,
     *     sourceAccountID?: string|null,
     *     lastRecovery?: RecoveryLifeCycle|null,
     *     launchedVpcID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
