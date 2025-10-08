<?php

namespace Sunaoka\Aws\Structures\Ec2\GetManagedPrefixListEntries;

trait GetManagedPrefixListEntriesTrait
{
    /**
     * @param GetManagedPrefixListEntriesRequest $args
     * @return GetManagedPrefixListEntriesResponse
     */
    public function getManagedPrefixListEntries(GetManagedPrefixListEntriesRequest $args)
    {
        $result = parent::getManagedPrefixListEntries($args->toArray());
        return new GetManagedPrefixListEntriesResponse($result->toArray());
    }
}
