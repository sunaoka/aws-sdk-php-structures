<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetProposal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 * @property string $ProposalId
 */
class GetProposalRequest extends Request
{
    /**
     * @param array{
     *     NetworkId: string,
     *     ProposalId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
