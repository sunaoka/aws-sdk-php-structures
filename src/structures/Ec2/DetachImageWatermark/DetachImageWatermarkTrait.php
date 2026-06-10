<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachImageWatermark;

trait DetachImageWatermarkTrait
{
    /**
     * @param DetachImageWatermarkRequest $args
     * @return DetachImageWatermarkResponse
     */
    public function detachImageWatermark(DetachImageWatermarkRequest $args)
    {
        $result = parent::detachImageWatermark($args->toArray());
        return new DetachImageWatermarkResponse($result->toArray());
    }
}
