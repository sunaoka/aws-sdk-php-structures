<?php

namespace Sunaoka\Aws\Structures\kendra\DeleteThesaurus;

trait DeleteThesaurusTrait
{
    /**
     * @param DeleteThesaurusRequest $args
     * @return void
     */
    public function deleteThesaurus(DeleteThesaurusRequest $args)
    {
        parent::deleteThesaurus($args->toArray());
    }
}
