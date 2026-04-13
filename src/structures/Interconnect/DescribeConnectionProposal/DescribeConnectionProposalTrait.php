<?php

namespace Sunaoka\Aws\Structures\Interconnect\DescribeConnectionProposal;

trait DescribeConnectionProposalTrait
{
    /**
     * @param DescribeConnectionProposalRequest $args
     * @return DescribeConnectionProposalResponse
     */
    public function describeConnectionProposal(DescribeConnectionProposalRequest $args)
    {
        $result = parent::describeConnectionProposal($args->toArray());
        return new DescribeConnectionProposalResponse($result->toArray());
    }
}
