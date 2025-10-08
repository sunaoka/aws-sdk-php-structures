<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteHumanTaskUi;

trait DeleteHumanTaskUiTrait
{
    /**
     * @param DeleteHumanTaskUiRequest $args
     * @return DeleteHumanTaskUiResponse
     */
    public function deleteHumanTaskUi(DeleteHumanTaskUiRequest $args)
    {
        $result = parent::deleteHumanTaskUi($args->toArray());
        return new DeleteHumanTaskUiResponse($result->toArray());
    }
}
