<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeDominantLanguageDetectionJob;

trait DescribeDominantLanguageDetectionJobTrait
{
    /**
     * @param DescribeDominantLanguageDetectionJobRequest $args
     * @return DescribeDominantLanguageDetectionJobResponse
     */
    public function describeDominantLanguageDetectionJob(DescribeDominantLanguageDetectionJobRequest $args)
    {
        $result = parent::describeDominantLanguageDetectionJob($args->toArray());
        return new DescribeDominantLanguageDetectionJobResponse($result->toArray());
    }
}
