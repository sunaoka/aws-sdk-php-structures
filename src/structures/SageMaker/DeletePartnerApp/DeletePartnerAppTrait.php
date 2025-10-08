<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeletePartnerApp;

trait DeletePartnerAppTrait
{
    /**
     * @param DeletePartnerAppRequest $args
     * @return DeletePartnerAppResponse
     */
    public function deletePartnerApp(DeletePartnerAppRequest $args)
    {
        $result = parent::deletePartnerApp($args->toArray());
        return new DeletePartnerAppResponse($result->toArray());
    }
}
