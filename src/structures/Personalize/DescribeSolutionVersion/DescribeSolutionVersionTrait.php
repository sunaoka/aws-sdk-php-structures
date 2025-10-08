<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolutionVersion;

trait DescribeSolutionVersionTrait
{
    /**
     * @param DescribeSolutionVersionRequest $args
     * @return DescribeSolutionVersionResponse
     */
    public function describeSolutionVersion(DescribeSolutionVersionRequest $args)
    {
        $result = parent::describeSolutionVersion($args->toArray());
        return new DescribeSolutionVersionResponse($result->toArray());
    }
}
