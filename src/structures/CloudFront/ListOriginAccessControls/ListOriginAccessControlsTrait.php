<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListOriginAccessControls;

trait ListOriginAccessControlsTrait
{
    /**
     * @param ListOriginAccessControlsRequest $args
     * @return ListOriginAccessControlsResponse
     */
    public function listOriginAccessControls(ListOriginAccessControlsRequest $args)
    {
        $result = parent::listOriginAccessControls($args->toArray());
        return new ListOriginAccessControlsResponse($result->toArray());
    }
}
