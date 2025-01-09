<?php

namespace Sunaoka\Aws\Structures\IoTWireless\AssociateAwsAccountWithPartnerAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AmazonId
 * @property string $AppServerPrivateKey
 */
class SidewalkAccountInfo extends Shape
{
    /**
     * @param array{
     *     AmazonId?: string,
     *     AppServerPrivateKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
