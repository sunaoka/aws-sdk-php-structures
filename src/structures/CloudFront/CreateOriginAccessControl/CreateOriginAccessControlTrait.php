<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateOriginAccessControl;

trait CreateOriginAccessControlTrait
{
    /**
     * @param CreateOriginAccessControlRequest $args
     * @return CreateOriginAccessControlResponse
     */
    public function createOriginAccessControl(CreateOriginAccessControlRequest $args)
    {
        $result = parent::createOriginAccessControl($args->toArray());
        return new CreateOriginAccessControlResponse($result->toArray());
    }
}
