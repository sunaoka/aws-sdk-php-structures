<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeManagedPrefixLists;

trait DescribeManagedPrefixListsTrait
{
    /**
     * @param DescribeManagedPrefixListsRequest $args
     * @return DescribeManagedPrefixListsResponse
     */
    public function describeManagedPrefixLists(DescribeManagedPrefixListsRequest $args)
    {
        $result = parent::describeManagedPrefixLists($args->toArray());
        return new DescribeManagedPrefixListsResponse($result->toArray());
    }
}
