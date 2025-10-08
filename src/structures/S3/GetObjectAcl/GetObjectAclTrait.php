<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectAcl;

trait GetObjectAclTrait
{
    /**
     * @param GetObjectAclRequest $args
     * @return GetObjectAclResponse
     */
    public function getObjectAcl(GetObjectAclRequest $args)
    {
        $result = parent::getObjectAcl($args->toArray());
        return new GetObjectAclResponse($result->toArray());
    }
}
