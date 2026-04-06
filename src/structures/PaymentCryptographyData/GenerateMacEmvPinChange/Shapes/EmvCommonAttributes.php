<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMacEmvPinChange\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMV_OPTION_A'|'EMV_OPTION_B' $MajorKeyDerivationMode
 * @property string $PrimaryAccountNumber
 * @property string $PanSequenceNumber
 * @property string $ApplicationCryptogram
 * @property 'ECB'|'CBC' $Mode
 * @property 'NO_PADDING'|'ISO_IEC_7816_4' $PinBlockPaddingType
 * @property 'NONE'|'FRONT_OF_PIN_BLOCK' $PinBlockLengthPosition
 */
class EmvCommonAttributes extends Shape
{
    /**
     * @param array{
     *     MajorKeyDerivationMode: 'EMV_OPTION_A'|'EMV_OPTION_B',
     *     PrimaryAccountNumber: string,
     *     PanSequenceNumber: string,
     *     ApplicationCryptogram: string,
     *     Mode: 'ECB'|'CBC',
     *     PinBlockPaddingType: 'NO_PADDING'|'ISO_IEC_7816_4',
     *     PinBlockLengthPosition: 'NONE'|'FRONT_OF_PIN_BLOCK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
