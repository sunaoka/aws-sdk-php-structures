<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateLFTag;

trait CreateLFTagTrait
{
    /**
     * @param CreateLFTagRequest $args
     * @return CreateLFTagResponse
     */
    public function createLFTag(CreateLFTagRequest $args)
    {
        $result = parent::createLFTag($args->toArray());
        return new CreateLFTagResponse($result->toArray());
    }
}
