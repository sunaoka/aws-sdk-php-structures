<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePrefixLists;

trait DescribePrefixListsTrait
{
    /**
     * @param DescribePrefixListsRequest $args
     * @return DescribePrefixListsResponse
     */
    public function describePrefixLists(DescribePrefixListsRequest $args)
    {
        $result = parent::describePrefixLists($args->toArray());
        return new DescribePrefixListsResponse($result->toArray());
    }
}
