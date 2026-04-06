<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $GatewayGroupArn
 * @property string|null $SoftwareVersion
 */
class GatewaySummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     GatewayGroupArn?: string|null,
     *     SoftwareVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
