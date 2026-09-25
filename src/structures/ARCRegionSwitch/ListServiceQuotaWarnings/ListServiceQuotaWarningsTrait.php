<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListServiceQuotaWarnings;

trait ListServiceQuotaWarningsTrait
{
    /**
     * @param ListServiceQuotaWarningsRequest $args
     * @return ListServiceQuotaWarningsResponse
     */
    public function listServiceQuotaWarnings(ListServiceQuotaWarningsRequest $args)
    {
        $result = parent::listServiceQuotaWarnings($args->toArray());
        return new ListServiceQuotaWarningsResponse($result->toArray());
    }
}
