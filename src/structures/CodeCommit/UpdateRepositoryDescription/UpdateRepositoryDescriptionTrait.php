<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateRepositoryDescription;

trait UpdateRepositoryDescriptionTrait
{
    /**
     * @param UpdateRepositoryDescriptionRequest $args
     * @return void
     */
    public function updateRepositoryDescription(UpdateRepositoryDescriptionRequest $args)
    {
        parent::updateRepositoryDescription($args->toArray());
    }
}
