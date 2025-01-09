<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\DecryptData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMV_OPTION_A'|'EMV_OPTION_B' $MajorKeyDerivationMode
 * @property string $PrimaryAccountNumber
 * @property string $PanSequenceNumber
 * @property string $SessionDerivationData
 * @property 'ECB'|'CBC' $Mode
 * @property string $InitializationVector
 */
class EmvEncryptionAttributes extends Shape
{
    /**
     * @param array{
     *     MajorKeyDerivationMode: 'EMV_OPTION_A'|'EMV_OPTION_B',
     *     PrimaryAccountNumber: string,
     *     PanSequenceNumber: string,
     *     SessionDerivationData: string,
     *     Mode?: 'ECB'|'CBC',
     *     InitializationVector?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
