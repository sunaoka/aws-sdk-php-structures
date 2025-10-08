<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListHumanTaskUis;

trait ListHumanTaskUisTrait
{
    /**
     * @param ListHumanTaskUisRequest $args
     * @return ListHumanTaskUisResponse
     */
    public function listHumanTaskUis(ListHumanTaskUisRequest $args)
    {
        $result = parent::listHumanTaskUis($args->toArray());
        return new ListHumanTaskUisResponse($result->toArray());
    }
}
