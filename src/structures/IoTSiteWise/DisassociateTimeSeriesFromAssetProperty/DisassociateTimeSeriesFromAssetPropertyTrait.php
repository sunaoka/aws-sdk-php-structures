<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DisassociateTimeSeriesFromAssetProperty;

trait DisassociateTimeSeriesFromAssetPropertyTrait
{
    /**
     * @param DisassociateTimeSeriesFromAssetPropertyRequest $args
     * @return void
     */
    public function disassociateTimeSeriesFromAssetProperty(DisassociateTimeSeriesFromAssetPropertyRequest $args)
    {
        parent::disassociateTimeSeriesFromAssetProperty($args->toArray());
    }
}
