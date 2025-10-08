<?php

namespace Sunaoka\Aws\Structures\Efs\PutFileSystemPolicy;

trait PutFileSystemPolicyTrait
{
    /**
     * @param PutFileSystemPolicyRequest $args
     * @return PutFileSystemPolicyResponse
     */
    public function putFileSystemPolicy(PutFileSystemPolicyRequest $args)
    {
        $result = parent::putFileSystemPolicy($args->toArray());
        return new PutFileSystemPolicyResponse($result->toArray());
    }
}
