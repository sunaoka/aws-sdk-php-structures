<?php

namespace Sunaoka\Aws\Structures\Rds\CopyOptionGroup;

trait CopyOptionGroupTrait
{
    /**
     * @param CopyOptionGroupRequest $args
     * @return CopyOptionGroupResponse
     */
    public function copyOptionGroup(CopyOptionGroupRequest $args)
    {
        $result = parent::copyOptionGroup($args->toArray());
        return new CopyOptionGroupResponse($result->toArray());
    }
}
