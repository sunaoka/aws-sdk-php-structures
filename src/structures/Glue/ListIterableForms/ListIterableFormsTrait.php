<?php

namespace Sunaoka\Aws\Structures\Glue\ListIterableForms;

trait ListIterableFormsTrait
{
    /**
     * @param ListIterableFormsRequest $args
     * @return ListIterableFormsResponse
     */
    public function listIterableForms(ListIterableFormsRequest $args)
    {
        $result = parent::listIterableForms($args->toArray());
        return new ListIterableFormsResponse($result->toArray());
    }
}
