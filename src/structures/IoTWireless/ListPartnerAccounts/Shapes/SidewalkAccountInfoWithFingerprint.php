<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListPartnerAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AmazonId
 * @property string|null $Fingerprint
 * @property string|null $Arn
 */
class SidewalkAccountInfoWithFingerprint extends Shape
{
    /**
     * @param array{
     *     AmazonId?: string|null,
     *     Fingerprint?: string|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
