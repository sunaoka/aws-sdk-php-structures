<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetImageSet;

trait GetImageSetTrait
{
    /**
     * @param GetImageSetRequest $args
     * @return GetImageSetResponse
     */
    public function getImageSet(GetImageSetRequest $args)
    {
        $result = parent::getImageSet($args->toArray());
        return new GetImageSetResponse($result->toArray());
    }
}
