<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateProposal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $NetworkId
 * @property string $MemberId
 * @property Shapes\ProposalActions $Actions
 * @property string $Description
 * @property array<string, string> $Tags
 */
class CreateProposalRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken: string,
     *     NetworkId: string,
     *     MemberId: string,
     *     Actions: Shapes\ProposalActions,
     *     Description?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
