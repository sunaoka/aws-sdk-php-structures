<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteGateway;

trait DeleteGatewayTrait
{
    /**
     * @param DeleteGatewayRequest $args
     * @return void
     */
    public function deleteGateway(DeleteGatewayRequest $args)
    {
        parent::deleteGateway($args->toArray());
    }
}
