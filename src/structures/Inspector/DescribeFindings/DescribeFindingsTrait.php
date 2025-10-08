<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeFindings;

trait DescribeFindingsTrait
{
    /**
     * @param DescribeFindingsRequest $args
     * @return DescribeFindingsResponse
     */
    public function describeFindings(DescribeFindingsRequest $args)
    {
        $result = parent::describeFindings($args->toArray());
        return new DescribeFindingsResponse($result->toArray());
    }
}
