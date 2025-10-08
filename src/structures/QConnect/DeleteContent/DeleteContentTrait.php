<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteContent;

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
