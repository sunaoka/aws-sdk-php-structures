<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectAcl;

trait PutObjectAclTrait
{
    /**
     * @param PutObjectAclRequest $args
     * @return PutObjectAclResponse
     */
    public function putObjectAcl(PutObjectAclRequest $args)
    {
        $result = parent::putObjectAcl($args->toArray());
        return new PutObjectAclResponse($result->toArray());
    }
}
