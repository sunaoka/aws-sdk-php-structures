<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateIngressPoint;

trait CreateIngressPointTrait
{
    /**
     * @param CreateIngressPointRequest $args
     * @return CreateIngressPointResponse
     */
    public function createIngressPoint(CreateIngressPointRequest $args)
    {
        $result = parent::createIngressPoint($args->toArray());
        return new CreateIngressPointResponse($result->toArray());
    }
}
