<?php

namespace Sunaoka\Aws\Structures\Inspector\CreateExclusionsPreview;

trait CreateExclusionsPreviewTrait
{
    /**
     * @param CreateExclusionsPreviewRequest $args
     * @return CreateExclusionsPreviewResponse
     */
    public function createExclusionsPreview(CreateExclusionsPreviewRequest $args)
    {
        $result = parent::createExclusionsPreview($args->toArray());
        return new CreateExclusionsPreviewResponse($result->toArray());
    }
}
