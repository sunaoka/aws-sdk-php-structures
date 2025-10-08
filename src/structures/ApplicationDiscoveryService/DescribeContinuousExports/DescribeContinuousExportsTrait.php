<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeContinuousExports;

trait DescribeContinuousExportsTrait
{
    /**
     * @param DescribeContinuousExportsRequest $args
     * @return DescribeContinuousExportsResponse
     */
    public function describeContinuousExports(DescribeContinuousExportsRequest $args)
    {
        $result = parent::describeContinuousExports($args->toArray());
        return new DescribeContinuousExportsResponse($result->toArray());
    }
}
