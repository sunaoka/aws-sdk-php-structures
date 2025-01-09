<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DeleteConnectInstanceIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainArn
 */
class CustomerProfilesIntegrationIdentifier extends Shape
{
    /**
     * @param array{domainArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
