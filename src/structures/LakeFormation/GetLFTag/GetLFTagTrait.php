<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetLFTag;

trait GetLFTagTrait
{
    /**
     * @param GetLFTagRequest $args
     * @return GetLFTagResponse
     */
    public function getLFTag(GetLFTagRequest $args)
    {
        $result = parent::getLFTag($args->toArray());
        return new GetLFTagResponse($result->toArray());
    }
}
