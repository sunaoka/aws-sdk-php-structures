<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateRepositoryName;

trait UpdateRepositoryNameTrait
{
    /**
     * @param UpdateRepositoryNameRequest $args
     * @return void
     */
    public function updateRepositoryName(UpdateRepositoryNameRequest $args)
    {
        parent::updateRepositoryName($args->toArray());
    }
}
