<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifestNetworkInterfaces;

trait ListDecoderManifestNetworkInterfacesTrait
{
    /**
     * @param ListDecoderManifestNetworkInterfacesRequest $args
     * @return ListDecoderManifestNetworkInterfacesResponse
     */
    public function listDecoderManifestNetworkInterfaces(ListDecoderManifestNetworkInterfacesRequest $args)
    {
        $result = parent::listDecoderManifestNetworkInterfaces($args->toArray());
        return new ListDecoderManifestNetworkInterfacesResponse($result->toArray());
    }
}
