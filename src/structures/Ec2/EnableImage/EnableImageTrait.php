<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableImage;

trait EnableImageTrait
{
    /**
     * @param EnableImageRequest $args
     * @return EnableImageResponse
     */
    public function enableImage(EnableImageRequest $args)
    {
        $result = parent::enableImage($args->toArray());
        return new EnableImageResponse($result->toArray());
    }
}
