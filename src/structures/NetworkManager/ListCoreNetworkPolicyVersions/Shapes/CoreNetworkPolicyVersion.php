<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListCoreNetworkPolicyVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CoreNetworkId
 * @property int $PolicyVersionId
 * @property 'LIVE'|'LATEST' $Alias
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'PENDING_GENERATION'|'FAILED_GENERATION'|'READY_TO_EXECUTE'|'EXECUTING'|'EXECUTION_SUCCEEDED'|'OUT_OF_DATE' $ChangeSetState
 */
class CoreNetworkPolicyVersion extends Shape
{
    /**
     * @param array{
     *     CoreNetworkId?: string,
     *     PolicyVersionId?: int,
     *     Alias?: 'LIVE'|'LATEST',
     *     Description?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     ChangeSetState?: 'PENDING_GENERATION'|'FAILED_GENERATION'|'READY_TO_EXECUTE'|'EXECUTING'|'EXECUTION_SUCCEEDED'|'OUT_OF_DATE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
