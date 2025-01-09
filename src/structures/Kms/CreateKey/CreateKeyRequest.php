<?php

namespace Sunaoka\Aws\Structures\Kms\CreateKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Policy
 * @property string $Description
 * @property 'SIGN_VERIFY'|'ENCRYPT_DECRYPT'|'GENERATE_VERIFY_MAC'|'KEY_AGREEMENT' $KeyUsage
 * @property 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2' $CustomerMasterKeySpec
 * @property 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2' $KeySpec
 * @property 'AWS_KMS'|'EXTERNAL'|'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE' $Origin
 * @property string $CustomKeyStoreId
 * @property bool $BypassPolicyLockoutSafetyCheck
 * @property list<Shapes\Tag> $Tags
 * @property bool $MultiRegion
 * @property string $XksKeyId
 */
class CreateKeyRequest extends Request
{
    /**
     * @param array{
     *     Policy?: string,
     *     Description?: string,
     *     KeyUsage?: 'SIGN_VERIFY'|'ENCRYPT_DECRYPT'|'GENERATE_VERIFY_MAC'|'KEY_AGREEMENT',
     *     CustomerMasterKeySpec?: 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2',
     *     KeySpec?: 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2',
     *     Origin?: 'AWS_KMS'|'EXTERNAL'|'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE',
     *     CustomKeyStoreId?: string,
     *     BypassPolicyLockoutSafetyCheck?: bool,
     *     Tags?: list<Shapes\Tag>,
     *     MultiRegion?: bool,
     *     XksKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
