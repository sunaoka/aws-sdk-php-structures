<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningPlatforms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EncryptionAlgorithmOptions $encryptionAlgorithmOptions
 * @property HashAlgorithmOptions $hashAlgorithmOptions
 */
class SigningConfiguration extends Shape
{
    /**
     * @param array{
     *     encryptionAlgorithmOptions: EncryptionAlgorithmOptions,
     *     hashAlgorithmOptions: HashAlgorithmOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
