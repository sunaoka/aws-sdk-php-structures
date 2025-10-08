<?php

namespace Sunaoka\Aws\Structures\QApps\PredictQApp;

trait PredictQAppTrait
{
    /**
     * @param PredictQAppRequest $args
     * @return PredictQAppResponse
     */
    public function predictQApp(PredictQAppRequest $args)
    {
        $result = parent::predictQApp($args->toArray());
        return new PredictQAppResponse($result->toArray());
    }
}
