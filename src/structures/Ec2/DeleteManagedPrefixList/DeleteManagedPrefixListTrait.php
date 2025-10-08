<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteManagedPrefixList;

trait DeleteManagedPrefixListTrait
{
    /**
     * @param DeleteManagedPrefixListRequest $args
     * @return DeleteManagedPrefixListResponse
     */
    public function deleteManagedPrefixList(DeleteManagedPrefixListRequest $args)
    {
        $result = parent::deleteManagedPrefixList($args->toArray());
        return new DeleteManagedPrefixListResponse($result->toArray());
    }
}
