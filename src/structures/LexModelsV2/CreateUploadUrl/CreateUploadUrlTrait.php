<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateUploadUrl;

trait CreateUploadUrlTrait
{
    /**
     * @param CreateUploadUrlRequest $args
     * @return CreateUploadUrlResponse
     */
    public function createUploadUrl(CreateUploadUrlRequest $args)
    {
        $result = parent::createUploadUrl($args->toArray());
        return new CreateUploadUrlResponse($result->toArray());
    }
}
