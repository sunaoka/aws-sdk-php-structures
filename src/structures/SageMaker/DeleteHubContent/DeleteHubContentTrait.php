<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteHubContent;

trait DeleteHubContentTrait
{
    /**
     * @param DeleteHubContentRequest $args
     * @return void
     */
    public function deleteHubContent(DeleteHubContentRequest $args)
    {
        parent::deleteHubContent($args->toArray());
    }
}
