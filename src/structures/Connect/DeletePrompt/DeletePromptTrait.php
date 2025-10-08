<?php

namespace Sunaoka\Aws\Structures\Connect\DeletePrompt;

trait DeletePromptTrait
{
    /**
     * @param DeletePromptRequest $args
     * @return void
     */
    public function deletePrompt(DeletePromptRequest $args)
    {
        parent::deletePrompt($args->toArray());
    }
}
