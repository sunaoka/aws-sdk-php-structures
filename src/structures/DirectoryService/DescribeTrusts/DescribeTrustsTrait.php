<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeTrusts;

trait DescribeTrustsTrait
{
    /**
     * @param DescribeTrustsRequest $args
     * @return DescribeTrustsResponse
     */
    public function describeTrusts(DescribeTrustsRequest $args)
    {
        $result = parent::describeTrusts($args->toArray());
        return new DescribeTrustsResponse($result->toArray());
    }
}
