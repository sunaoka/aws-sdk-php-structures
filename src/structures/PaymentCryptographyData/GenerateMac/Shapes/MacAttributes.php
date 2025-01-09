<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMac\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ISO9797_ALGORITHM1'|'ISO9797_ALGORITHM3'|'CMAC'|'HMAC_SHA224'|'HMAC_SHA256'|'HMAC_SHA384'|'HMAC_SHA512' $Algorithm
 * @property MacAlgorithmEmv $EmvMac
 * @property MacAlgorithmDukpt $DukptIso9797Algorithm1
 * @property MacAlgorithmDukpt $DukptIso9797Algorithm3
 * @property MacAlgorithmDukpt $DukptCmac
 */
class MacAttributes extends Shape
{
    /**
     * @param array{
     *     Algorithm?: 'ISO9797_ALGORITHM1'|'ISO9797_ALGORITHM3'|'CMAC'|'HMAC_SHA224'|'HMAC_SHA256'|'HMAC_SHA384'|'HMAC_SHA512',
     *     EmvMac?: MacAlgorithmEmv,
     *     DukptIso9797Algorithm1?: MacAlgorithmDukpt,
     *     DukptIso9797Algorithm3?: MacAlgorithmDukpt,
     *     DukptCmac?: MacAlgorithmDukpt
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
