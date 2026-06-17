<?php

namespace Sunaoka\Aws\Structures\Glue\PutFormType;

trait PutFormTypeTrait
{
    /**
     * @param PutFormTypeRequest $args
     * @return PutFormTypeResponse
     */
    public function putFormType(PutFormTypeRequest $args)
    {
        $result = parent::putFormType($args->toArray());
        return new PutFormTypeResponse($result->toArray());
    }
}
