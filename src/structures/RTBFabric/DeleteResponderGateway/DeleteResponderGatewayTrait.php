<?php

namespace Sunaoka\Aws\Structures\RTBFabric\DeleteResponderGateway;

trait DeleteResponderGatewayTrait
{
    /**
     * @param DeleteResponderGatewayRequest $args
     * @return DeleteResponderGatewayResponse
     */
    public function deleteResponderGateway(DeleteResponderGatewayRequest $args)
    {
        $result = parent::deleteResponderGateway($args->toArray());
        return new DeleteResponderGatewayResponse($result->toArray());
    }
}
