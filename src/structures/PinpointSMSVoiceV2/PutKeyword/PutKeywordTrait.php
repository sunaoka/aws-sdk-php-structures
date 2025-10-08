<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\PutKeyword;

trait PutKeywordTrait
{
    /**
     * @param PutKeywordRequest $args
     * @return PutKeywordResponse
     */
    public function putKeyword(PutKeywordRequest $args)
    {
        $result = parent::putKeyword($args->toArray());
        return new PutKeywordResponse($result->toArray());
    }
}
