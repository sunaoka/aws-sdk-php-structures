<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHumanTaskUi;

trait CreateHumanTaskUiTrait
{
    /**
     * @param CreateHumanTaskUiRequest $args
     * @return CreateHumanTaskUiResponse
     */
    public function createHumanTaskUi(CreateHumanTaskUiRequest $args)
    {
        $result = parent::createHumanTaskUi($args->toArray());
        return new CreateHumanTaskUiResponse($result->toArray());
    }
}
