<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateManagedPrefixList;

trait CreateManagedPrefixListTrait
{
    /**
     * @param CreateManagedPrefixListRequest $args
     * @return CreateManagedPrefixListResponse
     */
    public function createManagedPrefixList(CreateManagedPrefixListRequest $args)
    {
        $result = parent::createManagedPrefixList($args->toArray());
        return new CreateManagedPrefixListResponse($result->toArray());
    }
}
