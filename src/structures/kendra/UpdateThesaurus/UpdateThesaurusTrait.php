<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateThesaurus;

trait UpdateThesaurusTrait
{
    /**
     * @param UpdateThesaurusRequest $args
     * @return void
     */
    public function updateThesaurus(UpdateThesaurusRequest $args)
    {
        parent::updateThesaurus($args->toArray());
    }
}
