<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteProject;

trait DeleteProjectTrait
{
    /**
     * @param DeleteProjectRequest $args
     * @return void
     */
    public function deleteProject(DeleteProjectRequest $args)
    {
        parent::deleteProject($args->toArray());
    }
}
