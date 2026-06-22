<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ListManagedMicrovmImages;

trait ListManagedMicrovmImagesTrait
{
    /**
     * @param ListManagedMicrovmImagesRequest $args
     * @return ListManagedMicrovmImagesResponse
     */
    public function listManagedMicrovmImages(ListManagedMicrovmImagesRequest $args)
    {
        $result = parent::listManagedMicrovmImages($args->toArray());
        return new ListManagedMicrovmImagesResponse($result->toArray());
    }
}
