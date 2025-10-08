<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetForm;

trait GetFormTrait
{
    /**
     * @param GetFormRequest $args
     * @return GetFormResponse
     */
    public function getForm(GetFormRequest $args)
    {
        $result = parent::getForm($args->toArray());
        return new GetFormResponse($result->toArray());
    }
}
