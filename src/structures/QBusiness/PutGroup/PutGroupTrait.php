<?php

namespace Sunaoka\Aws\Structures\QBusiness\PutGroup;

trait PutGroupTrait
{
    /**
     * @param PutGroupRequest $args
     * @return PutGroupResponse
     */
    public function putGroup(PutGroupRequest $args)
    {
        $result = parent::putGroup($args->toArray());
        return new PutGroupResponse($result->toArray());
    }
}
