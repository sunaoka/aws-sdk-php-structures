<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyManagedPrefixList;

trait ModifyManagedPrefixListTrait
{
    /**
     * @param ModifyManagedPrefixListRequest $args
     * @return ModifyManagedPrefixListResponse
     */
    public function modifyManagedPrefixList(ModifyManagedPrefixListRequest $args)
    {
        $result = parent::modifyManagedPrefixList($args->toArray());
        return new ModifyManagedPrefixListResponse($result->toArray());
    }
}
