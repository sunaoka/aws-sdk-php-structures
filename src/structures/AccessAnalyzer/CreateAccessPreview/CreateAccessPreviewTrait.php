<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAccessPreview;

trait CreateAccessPreviewTrait
{
    /**
     * @param CreateAccessPreviewRequest $args
     * @return CreateAccessPreviewResponse
     */
    public function createAccessPreview(CreateAccessPreviewRequest $args)
    {
        $result = parent::createAccessPreview($args->toArray());
        return new CreateAccessPreviewResponse($result->toArray());
    }
}
