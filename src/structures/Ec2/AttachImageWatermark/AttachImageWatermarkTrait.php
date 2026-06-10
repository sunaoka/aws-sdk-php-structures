<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachImageWatermark;

trait AttachImageWatermarkTrait
{
    /**
     * @param AttachImageWatermarkRequest $args
     * @return AttachImageWatermarkResponse
     */
    public function attachImageWatermark(AttachImageWatermarkRequest $args)
    {
        $result = parent::attachImageWatermark($args->toArray());
        return new AttachImageWatermarkResponse($result->toArray());
    }
}
