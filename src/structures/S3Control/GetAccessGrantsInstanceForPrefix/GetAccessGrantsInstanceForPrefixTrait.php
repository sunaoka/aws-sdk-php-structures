<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessGrantsInstanceForPrefix;

trait GetAccessGrantsInstanceForPrefixTrait
{
    /**
     * @param GetAccessGrantsInstanceForPrefixRequest $args
     * @return GetAccessGrantsInstanceForPrefixResponse
     */
    public function getAccessGrantsInstanceForPrefix(GetAccessGrantsInstanceForPrefixRequest $args)
    {
        $result = parent::getAccessGrantsInstanceForPrefix($args->toArray());
        return new GetAccessGrantsInstanceForPrefixResponse($result->toArray());
    }
}
