<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateDataKeyPairWithoutPlaintext;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Psr\Http\Message\StreamInterface $PrivateKeyCiphertextBlob
 * @property \Psr\Http\Message\StreamInterface $PublicKey
 * @property string|null $KeyId
 * @property 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SM2'|null $KeyPairSpec
 * @property string|null $KeyMaterialId
 */
class GenerateDataKeyPairWithoutPlaintextResponse extends Response
{
}
