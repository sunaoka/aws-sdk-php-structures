<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ImportDiskImage;

trait ImportDiskImageTrait
{
    /**
     * @param ImportDiskImageRequest $args
     * @return ImportDiskImageResponse
     */
    public function importDiskImage(ImportDiskImageRequest $args)
    {
        $result = parent::importDiskImage($args->toArray());
        return new ImportDiskImageResponse($result->toArray());
    }
}
