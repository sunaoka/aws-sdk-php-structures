<?php

namespace Sunaoka\Aws\Structures\imagebuilder\DeleteComponent;

trait DeleteComponentTrait
{
    /**
     * @param DeleteComponentRequest $args
     * @return DeleteComponentResponse
     */
    public function deleteComponent(DeleteComponentRequest $args)
    {
        $result = parent::deleteComponent($args->toArray());
        return new DeleteComponentResponse($result->toArray());
    }
}
