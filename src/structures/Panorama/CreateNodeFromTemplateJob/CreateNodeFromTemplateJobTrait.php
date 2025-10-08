<?php

namespace Sunaoka\Aws\Structures\Panorama\CreateNodeFromTemplateJob;

trait CreateNodeFromTemplateJobTrait
{
    /**
     * @param CreateNodeFromTemplateJobRequest $args
     * @return CreateNodeFromTemplateJobResponse
     */
    public function createNodeFromTemplateJob(CreateNodeFromTemplateJobRequest $args)
    {
        $result = parent::createNodeFromTemplateJob($args->toArray());
        return new CreateNodeFromTemplateJobResponse($result->toArray());
    }
}
