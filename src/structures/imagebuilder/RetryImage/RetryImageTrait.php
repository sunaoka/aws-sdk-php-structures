<?php

namespace Sunaoka\Aws\Structures\imagebuilder\RetryImage;

trait RetryImageTrait
{
    /**
     * @param RetryImageRequest $args
     * @return RetryImageResponse
     */
    public function retryImage(RetryImageRequest $args)
    {
        $result = parent::retryImage($args->toArray());
        return new RetryImageResponse($result->toArray());
    }
}
