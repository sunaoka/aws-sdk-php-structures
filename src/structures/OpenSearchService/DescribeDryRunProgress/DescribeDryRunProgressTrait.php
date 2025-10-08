<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDryRunProgress;

trait DescribeDryRunProgressTrait
{
    /**
     * @param DescribeDryRunProgressRequest $args
     * @return DescribeDryRunProgressResponse
     */
    public function describeDryRunProgress(DescribeDryRunProgressRequest $args)
    {
        $result = parent::describeDryRunProgress($args->toArray());
        return new DescribeDryRunProgressResponse($result->toArray());
    }
}
