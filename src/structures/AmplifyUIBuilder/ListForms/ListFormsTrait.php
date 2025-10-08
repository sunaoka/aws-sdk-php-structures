<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ListForms;

trait ListFormsTrait
{
    /**
     * @param ListFormsRequest $args
     * @return ListFormsResponse
     */
    public function listForms(ListFormsRequest $args)
    {
        $result = parent::listForms($args->toArray());
        return new ListFormsResponse($result->toArray());
    }
}
