<?php

namespace Sunaoka\Aws\Structures\Route53\GetCheckerIpRanges;

trait GetCheckerIpRangesTrait
{
    /**
     * @param GetCheckerIpRangesRequest $args
     * @return GetCheckerIpRangesResponse
     */
    public function getCheckerIpRanges(GetCheckerIpRangesRequest $args)
    {
        $result = parent::getCheckerIpRanges($args->toArray());
        return new GetCheckerIpRangesResponse($result->toArray());
    }
}
