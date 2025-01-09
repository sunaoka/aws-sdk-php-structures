<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property 'HYPERLEDGER_FABRIC'|'ETHEREUM' $Framework
 * @property string $FrameworkVersion
 * @property NetworkFrameworkAttributes $FrameworkAttributes
 * @property string $VpcEndpointServiceName
 * @property VotingPolicy $VotingPolicy
 * @property 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'DELETING'|'DELETED' $Status
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property array<string, string> $Tags
 * @property string $Arn
 */
class Network extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Description?: string,
     *     Framework?: 'HYPERLEDGER_FABRIC'|'ETHEREUM',
     *     FrameworkVersion?: string,
     *     FrameworkAttributes?: NetworkFrameworkAttributes,
     *     VpcEndpointServiceName?: string,
     *     VotingPolicy?: VotingPolicy,
     *     Status?: 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'DELETING'|'DELETED',
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     Tags?: array<string, string>,
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
