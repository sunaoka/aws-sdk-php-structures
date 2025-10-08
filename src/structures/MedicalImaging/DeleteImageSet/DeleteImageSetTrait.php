<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\DeleteImageSet;

trait DeleteImageSetTrait
{
    /**
     * @param DeleteImageSetRequest $args
     * @return DeleteImageSetResponse
     */
    public function deleteImageSet(DeleteImageSetRequest $args)
    {
        $result = parent::deleteImageSet($args->toArray());
        return new DeleteImageSetResponse($result->toArray());
    }
}
