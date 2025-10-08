<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetContent;

trait GetContentTrait
{
    /**
     * @param GetContentRequest $args
     * @return GetContentResponse
     */
    public function getContent(GetContentRequest $args)
    {
        $result = parent::getContent($args->toArray());
        return new GetContentResponse($result->toArray());
    }
}
