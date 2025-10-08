<?php

namespace Sunaoka\Aws\Structures\MailManager\GetIngressPoint;

trait GetIngressPointTrait
{
    /**
     * @param GetIngressPointRequest $args
     * @return GetIngressPointResponse
     */
    public function getIngressPoint(GetIngressPointRequest $args)
    {
        $result = parent::getIngressPoint($args->toArray());
        return new GetIngressPointResponse($result->toArray());
    }
}
