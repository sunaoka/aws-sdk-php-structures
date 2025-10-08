<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeCrossAccountAccessRole;

trait DescribeCrossAccountAccessRoleTrait
{
    /**
     * @return DescribeCrossAccountAccessRoleResponse
     */
    public function describeCrossAccountAccessRole()
    {
        $result = parent::describeCrossAccountAccessRole();
        return new DescribeCrossAccountAccessRoleResponse($result->toArray());
    }
}
