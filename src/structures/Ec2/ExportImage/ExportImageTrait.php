<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportImage;

trait ExportImageTrait
{
    /**
     * @param ExportImageRequest $args
     * @return ExportImageResponse
     */
    public function exportImage(ExportImageRequest $args)
    {
        $result = parent::exportImage($args->toArray());
        return new ExportImageResponse($result->toArray());
    }
}
