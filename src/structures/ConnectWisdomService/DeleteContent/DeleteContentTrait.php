<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\DeleteContent;

trait DeleteContentTrait
{
    /**
     * @param DeleteContentRequest $args
     * @return DeleteContentResponse
     */
    public function deleteContent(DeleteContentRequest $args)
    {
        $result = parent::deleteContent($args->toArray());
        return new DeleteContentResponse($result->toArray());
    }
}
