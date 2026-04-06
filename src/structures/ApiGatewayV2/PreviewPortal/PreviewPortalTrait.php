<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\PreviewPortal;

trait PreviewPortalTrait
{
    /**
     * @param PreviewPortalRequest $args
     * @return PreviewPortalResponse
     */
    public function previewPortal(PreviewPortalRequest $args)
    {
        $result = parent::previewPortal($args->toArray());
        return new PreviewPortalResponse($result->toArray());
    }
}
