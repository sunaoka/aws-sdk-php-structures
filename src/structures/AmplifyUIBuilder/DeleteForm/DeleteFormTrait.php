<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\DeleteForm;

trait DeleteFormTrait
{
    /**
     * @param DeleteFormRequest $args
     * @return void
     */
    public function deleteForm(DeleteFormRequest $args)
    {
        parent::deleteForm($args->toArray());
    }
}
