<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateGateway;

trait UpdateGatewayTrait
{
    /**
     * @param UpdateGatewayRequest $args
     * @return void
     */
    public function updateGateway(UpdateGatewayRequest $args)
    {
        parent::updateGateway($args->toArray());
    }
}
