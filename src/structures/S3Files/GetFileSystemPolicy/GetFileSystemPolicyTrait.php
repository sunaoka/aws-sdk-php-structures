<?php

namespace Sunaoka\Aws\Structures\S3Files\GetFileSystemPolicy;

trait GetFileSystemPolicyTrait
{
    /**
     * @param GetFileSystemPolicyRequest $args
     * @return GetFileSystemPolicyResponse
     */
    public function getFileSystemPolicy(GetFileSystemPolicyRequest $args)
    {
        $result = parent::getFileSystemPolicy($args->toArray());
        return new GetFileSystemPolicyResponse($result->toArray());
    }
}
