<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent;

trait SelectObjectContentTrait
{
    /**
     * @param SelectObjectContentRequest $args
     * @return SelectObjectContentResponse
     */
    public function selectObjectContent(SelectObjectContentRequest $args)
    {
        $result = parent::selectObjectContent($args->toArray());
        return new SelectObjectContentResponse($result->toArray());
    }
}
