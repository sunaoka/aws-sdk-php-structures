<?php

namespace Sunaoka\Aws\Structures\Kms\CreateKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Policy
 * @property string|null $Description
 * @property 'SIGN_VERIFY'|'ENCRYPT_DECRYPT'|'GENERATE_VERIFY_MAC'|'KEY_AGREEMENT'|null $KeyUsage
 * @property 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2'|null $CustomerMasterKeySpec
 * @property 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2'|'ML_DSA_44'|'ML_DSA_65'|'ML_DSA_87'|'ECC_NIST_EDWARDS25519'|null $KeySpec
 * @property 'AWS_KMS'|'EXTERNAL'|'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE'|null $Origin
 * @property string|null $CustomKeyStoreId
 * @property bool|null $BypassPolicyLockoutSafetyCheck
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $MultiRegion
 * @property string|null $XksKeyId
 */
class CreateKeyRequest extends Request
{
    /**
     * @param array{
     *     Policy?: string|null,
     *     Description?: string|null,
     *     KeyUsage?: 'SIGN_VERIFY'|'ENCRYPT_DECRYPT'|'GENERATE_VERIFY_MAC'|'KEY_AGREEMENT'|null,
     *     CustomerMasterKeySpec?: 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2'|null,
     *     KeySpec?: 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2'|'ML_DSA_44'|'ML_DSA_65'|'ML_DSA_87'|'ECC_NIST_EDWARDS25519'|null,
     *     Origin?: 'AWS_KMS'|'EXTERNAL'|'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE'|null,
     *     CustomKeyStoreId?: string|null,
     *     BypassPolicyLockoutSafetyCheck?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     MultiRegion?: bool|null,
     *     XksKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
