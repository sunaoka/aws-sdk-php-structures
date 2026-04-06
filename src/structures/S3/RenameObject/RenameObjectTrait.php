<?php

namespace Sunaoka\Aws\Structures\S3\RenameObject;

trait RenameObjectTrait
{
    /**
     * @param RenameObjectRequest $args
     * @return RenameObjectResponse
     */
    public function renameObject(RenameObjectRequest $args)
    {
        $result = parent::renameObject($args->toArray());
        return new RenameObjectResponse($result->toArray());
    }
}
