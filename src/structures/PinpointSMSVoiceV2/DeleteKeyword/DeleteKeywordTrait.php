<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteKeyword;

trait DeleteKeywordTrait
{
    /**
     * @param DeleteKeywordRequest $args
     * @return DeleteKeywordResponse
     */
    public function deleteKeyword(DeleteKeywordRequest $args)
    {
        $result = parent::deleteKeyword($args->toArray());
        return new DeleteKeywordResponse($result->toArray());
    }
}
