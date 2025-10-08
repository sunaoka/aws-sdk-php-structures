<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ImportVmImage;

trait ImportVmImageTrait
{
    /**
     * @param ImportVmImageRequest $args
     * @return ImportVmImageResponse
     */
    public function importVmImage(ImportVmImageRequest $args)
    {
        $result = parent::importVmImage($args->toArray());
        return new ImportVmImageResponse($result->toArray());
    }
}
