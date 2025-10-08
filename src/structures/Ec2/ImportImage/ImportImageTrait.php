<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportImage;

trait ImportImageTrait
{
    /**
     * @param ImportImageRequest $args
     * @return ImportImageResponse
     */
    public function importImage(ImportImageRequest $args)
    {
        $result = parent::importImage($args->toArray());
        return new ImportImageResponse($result->toArray());
    }
}
