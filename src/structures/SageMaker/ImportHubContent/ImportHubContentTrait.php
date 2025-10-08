<?php

namespace Sunaoka\Aws\Structures\SageMaker\ImportHubContent;

trait ImportHubContentTrait
{
    /**
     * @param ImportHubContentRequest $args
     * @return ImportHubContentResponse
     */
    public function importHubContent(ImportHubContentRequest $args)
    {
        $result = parent::importHubContent($args->toArray());
        return new ImportHubContentResponse($result->toArray());
    }
}
