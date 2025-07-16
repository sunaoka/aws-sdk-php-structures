<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMac\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ISO9797_ALGORITHM1'|'ISO9797_ALGORITHM3'|'CMAC'|'HMAC'|'HMAC_SHA224'|'HMAC_SHA256'|'HMAC_SHA384'|'HMAC_SHA512'|null $Algorithm
 * @property MacAlgorithmEmv|null $EmvMac
 * @property MacAlgorithmDukpt|null $DukptIso9797Algorithm1
 * @property MacAlgorithmDukpt|null $DukptIso9797Algorithm3
 * @property MacAlgorithmDukpt|null $DukptCmac
 */
class MacAttributes extends Shape
{
    /**
     * @param array{
     *     Algorithm?: 'ISO9797_ALGORITHM1'|'ISO9797_ALGORITHM3'|'CMAC'|'HMAC'|'HMAC_SHA224'|'HMAC_SHA256'|'HMAC_SHA384'|'HMAC_SHA512'|null,
     *     EmvMac?: MacAlgorithmEmv|null,
     *     DukptIso9797Algorithm1?: MacAlgorithmDukpt|null,
     *     DukptIso9797Algorithm3?: MacAlgorithmDukpt|null,
     *     DukptCmac?: MacAlgorithmDukpt|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
