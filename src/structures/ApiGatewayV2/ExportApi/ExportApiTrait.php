<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ExportApi;

trait ExportApiTrait
{
    /**
     * @param ExportApiRequest $args
     * @return ExportApiResponse
     */
    public function exportApi(ExportApiRequest $args)
    {
        $result = parent::exportApi($args->toArray());
        return new ExportApiResponse($result->toArray());
    }
}
