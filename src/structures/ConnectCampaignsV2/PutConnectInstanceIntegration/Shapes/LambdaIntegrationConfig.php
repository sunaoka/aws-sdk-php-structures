<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutConnectInstanceIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $functionArn
 */
class LambdaIntegrationConfig extends Shape
{
    /**
     * @param array{functionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
