<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteLFTag;

trait DeleteLFTagTrait
{
    /**
     * @param DeleteLFTagRequest $args
     * @return DeleteLFTagResponse
     */
    public function deleteLFTag(DeleteLFTagRequest $args)
    {
        $result = parent::deleteLFTag($args->toArray());
        return new DeleteLFTagResponse($result->toArray());
    }
}
