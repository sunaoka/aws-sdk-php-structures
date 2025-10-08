<?php

namespace Sunaoka\Aws\Structures\Ec2\ListImagesInRecycleBin;

trait ListImagesInRecycleBinTrait
{
    /**
     * @param ListImagesInRecycleBinRequest $args
     * @return ListImagesInRecycleBinResponse
     */
    public function listImagesInRecycleBin(ListImagesInRecycleBinRequest $args)
    {
        $result = parent::listImagesInRecycleBin($args->toArray());
        return new ListImagesInRecycleBinResponse($result->toArray());
    }
}
