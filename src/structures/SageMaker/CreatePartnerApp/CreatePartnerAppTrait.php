<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePartnerApp;

trait CreatePartnerAppTrait
{
    /**
     * @param CreatePartnerAppRequest $args
     * @return CreatePartnerAppResponse
     */
    public function createPartnerApp(CreatePartnerAppRequest $args)
    {
        $result = parent::createPartnerApp($args->toArray());
        return new CreatePartnerAppResponse($result->toArray());
    }
}
