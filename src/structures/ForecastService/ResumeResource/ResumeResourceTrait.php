<?php

namespace Sunaoka\Aws\Structures\ForecastService\ResumeResource;

trait ResumeResourceTrait
{
    /**
     * @param ResumeResourceRequest $args
     * @return void
     */
    public function resumeResource(ResumeResourceRequest $args)
    {
        parent::resumeResource($args->toArray());
    }
}
