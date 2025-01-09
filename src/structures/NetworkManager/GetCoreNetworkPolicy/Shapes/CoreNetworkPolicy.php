<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CoreNetworkId
 * @property int $PolicyVersionId
 * @property 'LIVE'|'LATEST' $Alias
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'PENDING_GENERATION'|'FAILED_GENERATION'|'READY_TO_EXECUTE'|'EXECUTING'|'EXECUTION_SUCCEEDED'|'OUT_OF_DATE' $ChangeSetState
 * @property list<CoreNetworkPolicyError> $PolicyErrors
 * @property string $PolicyDocument
 */
class CoreNetworkPolicy extends Shape
{
    /**
     * @param array{
     *     CoreNetworkId?: string,
     *     PolicyVersionId?: int,
     *     Alias?: 'LIVE'|'LATEST',
     *     Description?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     ChangeSetState?: 'PENDING_GENERATION'|'FAILED_GENERATION'|'READY_TO_EXECUTE'|'EXECUTING'|'EXECUTION_SUCCEEDED'|'OUT_OF_DATE',
     *     PolicyErrors?: list<CoreNetworkPolicyError>,
     *     PolicyDocument?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
