<?php

namespace Sunaoka\Aws\Structures\ELBProxy\DeleteProxy;

trait DeleteProxyTrait
{
    /**
     * @param DeleteProxyRequest $args
     * @return DeleteProxyResponse
     */
    public function deleteProxy(DeleteProxyRequest $args)
    {
        $result = parent::deleteProxy($args->toArray());
        return new DeleteProxyResponse($result->toArray());
    }
}
