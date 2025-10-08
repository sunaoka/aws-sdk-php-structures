<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityModel;

trait GetDataQualityModelTrait
{
    /**
     * @param GetDataQualityModelRequest $args
     * @return GetDataQualityModelResponse
     */
    public function getDataQualityModel(GetDataQualityModelRequest $args)
    {
        $result = parent::getDataQualityModel($args->toArray());
        return new GetDataQualityModelResponse($result->toArray());
    }
}
