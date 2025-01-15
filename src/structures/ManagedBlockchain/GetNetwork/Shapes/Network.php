<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property 'HYPERLEDGER_FABRIC'|'ETHEREUM'|null $Framework
 * @property string|null $FrameworkVersion
 * @property NetworkFrameworkAttributes|null $FrameworkAttributes
 * @property string|null $VpcEndpointServiceName
 * @property VotingPolicy|null $VotingPolicy
 * @property 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'DELETING'|'DELETED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property array<string, string>|null $Tags
 * @property string|null $Arn
 */
class Network extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Framework?: 'HYPERLEDGER_FABRIC'|'ETHEREUM'|null,
     *     FrameworkVersion?: string|null,
     *     FrameworkAttributes?: NetworkFrameworkAttributes|null,
     *     VpcEndpointServiceName?: string|null,
     *     VotingPolicy?: VotingPolicy|null,
     *     Status?: 'CREATING'|'AVAILABLE'|'CREATE_FAILED'|'DELETING'|'DELETED'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     Tags?: array<string, string>|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
