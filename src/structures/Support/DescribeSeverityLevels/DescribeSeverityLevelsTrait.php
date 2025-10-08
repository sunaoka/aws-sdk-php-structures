<?php

namespace Sunaoka\Aws\Structures\Support\DescribeSeverityLevels;

trait DescribeSeverityLevelsTrait
{
    /**
     * @param DescribeSeverityLevelsRequest $args
     * @return DescribeSeverityLevelsResponse
     */
    public function describeSeverityLevels(DescribeSeverityLevelsRequest $args)
    {
        $result = parent::describeSeverityLevels($args->toArray());
        return new DescribeSeverityLevelsResponse($result->toArray());
    }
}
