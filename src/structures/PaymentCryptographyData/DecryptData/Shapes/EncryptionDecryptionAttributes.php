<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\DecryptData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AsymmetricEncryptionAttributes|null $Asymmetric
 * @property DukptEncryptionAttributes|null $Dukpt
 * @property SymmetricEncryptionAttributes|null $Symmetric
 */
class EncryptionDecryptionAttributes extends Shape
{
    /**
     * @param array{
     *     Asymmetric?: AsymmetricEncryptionAttributes|null,
     *     Dukpt?: DukptEncryptionAttributes|null,
     *     Symmetric?: SymmetricEncryptionAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
