<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateLFTag;

trait UpdateLFTagTrait
{
    /**
     * @param UpdateLFTagRequest $args
     * @return UpdateLFTagResponse
     */
    public function updateLFTag(UpdateLFTagRequest $args)
    {
        $result = parent::updateLFTag($args->toArray());
        return new UpdateLFTagResponse($result->toArray());
    }
}
