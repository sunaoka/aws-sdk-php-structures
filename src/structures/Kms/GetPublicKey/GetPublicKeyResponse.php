<?php

namespace Sunaoka\Aws\Structures\Kms\GetPublicKey;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $KeyId
 * @property string $PublicKey
 * @property 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2' $CustomerMasterKeySpec
 * @property 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2' $KeySpec
 * @property 'SIGN_VERIFY'|'ENCRYPT_DECRYPT'|'GENERATE_VERIFY_MAC'|'KEY_AGREEMENT' $KeyUsage
 * @property list<'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE'> $EncryptionAlgorithms
 * @property list<'RSASSA_PSS_SHA_256'|'RSASSA_PSS_SHA_384'|'RSASSA_PSS_SHA_512'|'RSASSA_PKCS1_V1_5_SHA_256'|'RSASSA_PKCS1_V1_5_SHA_384'|'RSASSA_PKCS1_V1_5_SHA_512'|'ECDSA_SHA_256'|'ECDSA_SHA_384'|'ECDSA_SHA_512'|'SM2DSA'> $SigningAlgorithms
 * @property list<'ECDH'> $KeyAgreementAlgorithms
 */
class GetPublicKeyResponse extends Response
{
}
