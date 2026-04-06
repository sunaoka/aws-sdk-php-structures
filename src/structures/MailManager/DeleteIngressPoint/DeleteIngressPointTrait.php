<?php

namespace Sunaoka\Aws\Structures\MailManager\DeleteIngressPoint;

trait DeleteIngressPointTrait
{
    /**
     * @param DeleteIngressPointRequest $args
     * @return DeleteIngressPointResponse
     */
    public function deleteIngressPoint(DeleteIngressPointRequest $args)
    {
        $result = parent::deleteIngressPoint($args->toArray());
        return new DeleteIngressPointResponse($result->toArray());
    }
}
