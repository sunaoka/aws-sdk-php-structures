<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateClassificationJob;

trait CreateClassificationJobTrait
{
    /**
     * @param CreateClassificationJobRequest $args
     * @return CreateClassificationJobResponse
     */
    public function createClassificationJob(CreateClassificationJobRequest $args)
    {
        $result = parent::createClassificationJob($args->toArray());
        return new CreateClassificationJobResponse($result->toArray());
    }
}
