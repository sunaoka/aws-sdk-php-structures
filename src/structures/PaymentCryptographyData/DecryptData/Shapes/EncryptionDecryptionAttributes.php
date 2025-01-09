<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\DecryptData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SymmetricEncryptionAttributes $Symmetric
 * @property AsymmetricEncryptionAttributes $Asymmetric
 * @property DukptEncryptionAttributes $Dukpt
 * @property EmvEncryptionAttributes $Emv
 */
class EncryptionDecryptionAttributes extends Shape
{
    /**
     * @param array{
     *     Symmetric?: SymmetricEncryptionAttributes,
     *     Asymmetric?: AsymmetricEncryptionAttributes,
     *     Dukpt?: DukptEncryptionAttributes,
     *     Emv?: EmvEncryptionAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
