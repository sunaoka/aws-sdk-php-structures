<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\CopyImageSet;

trait CopyImageSetTrait
{
    /**
     * @param CopyImageSetRequest $args
     * @return CopyImageSetResponse
     */
    public function copyImageSet(CopyImageSetRequest $args)
    {
        $result = parent::copyImageSet($args->toArray());
        return new CopyImageSetResponse($result->toArray());
    }
}
