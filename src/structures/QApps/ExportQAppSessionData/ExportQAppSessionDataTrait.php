<?php

namespace Sunaoka\Aws\Structures\QApps\ExportQAppSessionData;

trait ExportQAppSessionDataTrait
{
    /**
     * @param ExportQAppSessionDataRequest $args
     * @return ExportQAppSessionDataResponse
     */
    public function exportQAppSessionData(ExportQAppSessionDataRequest $args)
    {
        $result = parent::exportQAppSessionData($args->toArray());
        return new ExportQAppSessionDataResponse($result->toArray());
    }
}
