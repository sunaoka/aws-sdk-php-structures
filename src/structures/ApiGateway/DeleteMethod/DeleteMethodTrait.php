<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteMethod;

trait DeleteMethodTrait
{
    /**
     * @param DeleteMethodRequest $args
     * @return void
     */
    public function deleteMethod(DeleteMethodRequest $args)
    {
        parent::deleteMethod($args->toArray());
    }
}
