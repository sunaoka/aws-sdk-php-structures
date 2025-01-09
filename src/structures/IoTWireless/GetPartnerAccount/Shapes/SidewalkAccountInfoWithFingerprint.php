<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPartnerAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AmazonId
 * @property string $Fingerprint
 * @property string $Arn
 */
class SidewalkAccountInfoWithFingerprint extends Shape
{
    /**
     * @param array{
     *     AmazonId?: string,
     *     Fingerprint?: string,
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
