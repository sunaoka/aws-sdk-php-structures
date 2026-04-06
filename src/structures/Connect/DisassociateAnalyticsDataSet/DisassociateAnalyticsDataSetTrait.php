<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateAnalyticsDataSet;

trait DisassociateAnalyticsDataSetTrait
{
    /**
     * @param DisassociateAnalyticsDataSetRequest $args
     * @return void
     */
    public function disassociateAnalyticsDataSet(DisassociateAnalyticsDataSetRequest $args)
    {
        parent::disassociateAnalyticsDataSet($args->toArray());
    }
}
