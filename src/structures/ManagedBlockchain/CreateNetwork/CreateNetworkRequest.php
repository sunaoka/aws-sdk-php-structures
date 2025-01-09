<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $Name
 * @property string $Description
 * @property 'HYPERLEDGER_FABRIC'|'ETHEREUM' $Framework
 * @property string $FrameworkVersion
 * @property Shapes\NetworkFrameworkConfiguration $FrameworkConfiguration
 * @property Shapes\VotingPolicy $VotingPolicy
 * @property Shapes\MemberConfiguration $MemberConfiguration
 * @property array<string, string> $Tags
 */
class CreateNetworkRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken: string,
     *     Name: string,
     *     Description?: string,
     *     Framework: 'HYPERLEDGER_FABRIC'|'ETHEREUM',
     *     FrameworkVersion: string,
     *     FrameworkConfiguration?: Shapes\NetworkFrameworkConfiguration,
     *     VotingPolicy: Shapes\VotingPolicy,
     *     MemberConfiguration: Shapes\MemberConfiguration,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
