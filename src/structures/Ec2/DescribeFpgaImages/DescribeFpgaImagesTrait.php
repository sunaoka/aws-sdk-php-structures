<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFpgaImages;

trait DescribeFpgaImagesTrait
{
    /**
     * @param DescribeFpgaImagesRequest $args
     * @return DescribeFpgaImagesResponse
     */
    public function describeFpgaImages(DescribeFpgaImagesRequest $args)
    {
        $result = parent::describeFpgaImages($args->toArray());
        return new DescribeFpgaImagesResponse($result->toArray());
    }
}
