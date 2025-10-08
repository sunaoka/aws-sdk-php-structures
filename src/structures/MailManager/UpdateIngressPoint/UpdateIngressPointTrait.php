<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateIngressPoint;

trait UpdateIngressPointTrait
{
    /**
     * @param UpdateIngressPointRequest $args
     * @return UpdateIngressPointResponse
     */
    public function updateIngressPoint(UpdateIngressPointRequest $args)
    {
        $result = parent::updateIngressPoint($args->toArray());
        return new UpdateIngressPointResponse($result->toArray());
    }
}
