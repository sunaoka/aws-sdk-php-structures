<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\UpdateContent;

trait UpdateContentTrait
{
    /**
     * @param UpdateContentRequest $args
     * @return UpdateContentResponse
     */
    public function updateContent(UpdateContentRequest $args)
    {
        $result = parent::updateContent($args->toArray());
        return new UpdateContentResponse($result->toArray());
    }
}
