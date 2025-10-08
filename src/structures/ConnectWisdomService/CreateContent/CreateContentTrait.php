<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\CreateContent;

trait CreateContentTrait
{
    /**
     * @param CreateContentRequest $args
     * @return CreateContentResponse
     */
    public function createContent(CreateContentRequest $args)
    {
        $result = parent::createContent($args->toArray());
        return new CreateContentResponse($result->toArray());
    }
}
