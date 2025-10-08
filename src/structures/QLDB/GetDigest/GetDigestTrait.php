<?php

namespace Sunaoka\Aws\Structures\QLDB\GetDigest;

trait GetDigestTrait
{
    /**
     * @param GetDigestRequest $args
     * @return GetDigestResponse
     */
    public function getDigest(GetDigestRequest $args)
    {
        $result = parent::getDigest($args->toArray());
        return new GetDigestResponse($result->toArray());
    }
}
