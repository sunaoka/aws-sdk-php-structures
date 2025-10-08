<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateForm;

trait UpdateFormTrait
{
    /**
     * @param UpdateFormRequest $args
     * @return UpdateFormResponse
     */
    public function updateForm(UpdateFormRequest $args)
    {
        $result = parent::updateForm($args->toArray());
        return new UpdateFormResponse($result->toArray());
    }
}
