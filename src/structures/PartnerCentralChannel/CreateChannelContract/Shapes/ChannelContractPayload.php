<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateChannelContract\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManagedServicesAttestationPayload|null $managedServicesAttestationPayload
 */
class ChannelContractPayload extends Shape
{
    /**
     * @param array{managedServicesAttestationPayload?: ManagedServicesAttestationPayload|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
