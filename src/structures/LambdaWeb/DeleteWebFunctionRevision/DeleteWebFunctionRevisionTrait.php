<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\DeleteWebFunctionRevision;

trait DeleteWebFunctionRevisionTrait
{
    /**
     * @param DeleteWebFunctionRevisionRequest $args
     * @return void
     */
    public function deleteWebFunctionRevision(DeleteWebFunctionRevisionRequest $args)
    {
        parent::deleteWebFunctionRevision($args->toArray());
    }
}
