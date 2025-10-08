<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFastLaunchImages;

trait DescribeFastLaunchImagesTrait
{
    /**
     * @param DescribeFastLaunchImagesRequest $args
     * @return DescribeFastLaunchImagesResponse
     */
    public function describeFastLaunchImages(DescribeFastLaunchImagesRequest $args)
    {
        $result = parent::describeFastLaunchImages($args->toArray());
        return new DescribeFastLaunchImagesResponse($result->toArray());
    }
}
