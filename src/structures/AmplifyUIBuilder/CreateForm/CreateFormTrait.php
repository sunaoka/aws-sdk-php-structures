<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateForm;

trait CreateFormTrait
{
    /**
     * @param CreateFormRequest $args
     * @return CreateFormResponse
     */
    public function createForm(CreateFormRequest $args)
    {
        $result = parent::createForm($args->toArray());
        return new CreateFormResponse($result->toArray());
    }
}
