<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetIterableForms;

trait BatchGetIterableFormsTrait
{
    /**
     * @param BatchGetIterableFormsRequest $args
     * @return BatchGetIterableFormsResponse
     */
    public function batchGetIterableForms(BatchGetIterableFormsRequest $args)
    {
        $result = parent::batchGetIterableForms($args->toArray());
        return new BatchGetIterableFormsResponse($result->toArray());
    }
}
