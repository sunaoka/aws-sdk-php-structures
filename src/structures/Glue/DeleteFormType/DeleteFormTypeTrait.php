<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteFormType;

trait DeleteFormTypeTrait
{
    /**
     * @param DeleteFormTypeRequest $args
     * @return DeleteFormTypeResponse
     */
    public function deleteFormType(DeleteFormTypeRequest $args)
    {
        $result = parent::deleteFormType($args->toArray());
        return new DeleteFormTypeResponse($result->toArray());
    }
}
