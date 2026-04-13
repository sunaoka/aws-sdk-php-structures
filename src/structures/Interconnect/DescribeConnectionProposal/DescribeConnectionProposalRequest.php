<?php

namespace Sunaoka\Aws\Structures\Interconnect\DescribeConnectionProposal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $activationKey
 */
class DescribeConnectionProposalRequest extends Request
{
    /**
     * @param array{activationKey: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
