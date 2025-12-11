<?php

namespace Sunaoka\Aws\Structures\imagebuilder\DistributeImage;

trait DistributeImageTrait
{
    /**
     * @param DistributeImageRequest $args
     * @return DistributeImageResponse
     */
    public function distributeImage(DistributeImageRequest $args)
    {
        $result = parent::distributeImage($args->toArray());
        return new DistributeImageResponse($result->toArray());
    }
}
