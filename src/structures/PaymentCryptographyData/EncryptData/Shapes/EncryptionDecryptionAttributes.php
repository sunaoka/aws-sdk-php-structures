<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\EncryptData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SymmetricEncryptionAttributes|null $Symmetric
 * @property AsymmetricEncryptionAttributes|null $Asymmetric
 * @property DukptEncryptionAttributes|null $Dukpt
 * @property EmvEncryptionAttributes|null $Emv
 */
class EncryptionDecryptionAttributes extends Shape
{
    /**
     * @param array{
     *     Symmetric?: SymmetricEncryptionAttributes|null,
     *     Asymmetric?: AsymmetricEncryptionAttributes|null,
     *     Dukpt?: DukptEncryptionAttributes|null,
     *     Emv?: EmvEncryptionAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
