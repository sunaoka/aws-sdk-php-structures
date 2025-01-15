<?php

namespace Sunaoka\Aws\Structures\IoTWireless\AssociateAwsAccountWithPartnerAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AmazonId
 * @property string|null $AppServerPrivateKey
 */
class SidewalkAccountInfo extends Shape
{
    /**
     * @param array{
     *     AmazonId?: string|null,
     *     AppServerPrivateKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
