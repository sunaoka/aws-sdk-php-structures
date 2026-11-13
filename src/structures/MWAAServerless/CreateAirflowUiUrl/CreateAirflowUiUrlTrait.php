<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\CreateAirflowUiUrl;

trait CreateAirflowUiUrlTrait
{
    /**
     * @param CreateAirflowUiUrlRequest $args
     * @return CreateAirflowUiUrlResponse
     */
    public function createAirflowUiUrl(CreateAirflowUiUrlRequest $args)
    {
        $result = parent::createAirflowUiUrl($args->toArray());
        return new CreateAirflowUiUrlResponse($result->toArray());
    }
}
