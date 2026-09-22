<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateOneTimeDeepLinkCode;

trait CreateOneTimeDeepLinkCodeTrait
{
    /**
     * @param CreateOneTimeDeepLinkCodeRequest $args
     * @return CreateOneTimeDeepLinkCodeResponse
     */
    public function createOneTimeDeepLinkCode(CreateOneTimeDeepLinkCodeRequest $args)
    {
        $result = parent::createOneTimeDeepLinkCode($args->toArray());
        return new CreateOneTimeDeepLinkCodeResponse($result->toArray());
    }
}
