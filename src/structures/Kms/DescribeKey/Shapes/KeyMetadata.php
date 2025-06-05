<?php

namespace Sunaoka\Aws\Structures\Kms\DescribeKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AWSAccountId
 * @property string $KeyId
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property bool|null $Enabled
 * @property string|null $Description
 * @property 'SIGN_VERIFY'|'ENCRYPT_DECRYPT'|'GENERATE_VERIFY_MAC'|'KEY_AGREEMENT'|null $KeyUsage
 * @property 'Creating'|'Enabled'|'Disabled'|'PendingDeletion'|'PendingImport'|'PendingReplicaDeletion'|'Unavailable'|'Updating'|null $KeyState
 * @property \Aws\Api\DateTimeResult|null $DeletionDate
 * @property \Aws\Api\DateTimeResult|null $ValidTo
 * @property 'AWS_KMS'|'EXTERNAL'|'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE'|null $Origin
 * @property string|null $CustomKeyStoreId
 * @property string|null $CloudHsmClusterId
 * @property 'KEY_MATERIAL_EXPIRES'|'KEY_MATERIAL_DOES_NOT_EXPIRE'|null $ExpirationModel
 * @property 'AWS'|'CUSTOMER'|null $KeyManager
 * @property 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2'|null $CustomerMasterKeySpec
 * @property 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2'|null $KeySpec
 * @property list<'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE'>|null $EncryptionAlgorithms
 * @property list<'RSASSA_PSS_SHA_256'|'RSASSA_PSS_SHA_384'|'RSASSA_PSS_SHA_512'|'RSASSA_PKCS1_V1_5_SHA_256'|'RSASSA_PKCS1_V1_5_SHA_384'|'RSASSA_PKCS1_V1_5_SHA_512'|'ECDSA_SHA_256'|'ECDSA_SHA_384'|'ECDSA_SHA_512'|'SM2DSA'>|null $SigningAlgorithms
 * @property list<'ECDH'>|null $KeyAgreementAlgorithms
 * @property bool|null $MultiRegion
 * @property MultiRegionConfiguration|null $MultiRegionConfiguration
 * @property int<1, 365>|null $PendingDeletionWindowInDays
 * @property list<'HMAC_SHA_224'|'HMAC_SHA_256'|'HMAC_SHA_384'|'HMAC_SHA_512'>|null $MacAlgorithms
 * @property XksKeyConfigurationType|null $XksKeyConfiguration
 * @property string|null $CurrentKeyMaterialId
 */
class KeyMetadata extends Shape
{
    /**
     * @param array{
     *     AWSAccountId?: string|null,
     *     KeyId: string,
     *     Arn?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     Enabled?: bool|null,
     *     Description?: string|null,
     *     KeyUsage?: 'SIGN_VERIFY'|'ENCRYPT_DECRYPT'|'GENERATE_VERIFY_MAC'|'KEY_AGREEMENT'|null,
     *     KeyState?: 'Creating'|'Enabled'|'Disabled'|'PendingDeletion'|'PendingImport'|'PendingReplicaDeletion'|'Unavailable'|'Updating'|null,
     *     DeletionDate?: \Aws\Api\DateTimeResult|null,
     *     ValidTo?: \Aws\Api\DateTimeResult|null,
     *     Origin?: 'AWS_KMS'|'EXTERNAL'|'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE'|null,
     *     CustomKeyStoreId?: string|null,
     *     CloudHsmClusterId?: string|null,
     *     ExpirationModel?: 'KEY_MATERIAL_EXPIRES'|'KEY_MATERIAL_DOES_NOT_EXPIRE'|null,
     *     KeyManager?: 'AWS'|'CUSTOMER'|null,
     *     CustomerMasterKeySpec?: 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2'|null,
     *     KeySpec?: 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2'|null,
     *     EncryptionAlgorithms?: list<'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE'>|null,
     *     SigningAlgorithms?: list<'RSASSA_PSS_SHA_256'|'RSASSA_PSS_SHA_384'|'RSASSA_PSS_SHA_512'|'RSASSA_PKCS1_V1_5_SHA_256'|'RSASSA_PKCS1_V1_5_SHA_384'|'RSASSA_PKCS1_V1_5_SHA_512'|'ECDSA_SHA_256'|'ECDSA_SHA_384'|'ECDSA_SHA_512'|'SM2DSA'>|null,
     *     KeyAgreementAlgorithms?: list<'ECDH'>|null,
     *     MultiRegion?: bool|null,
     *     MultiRegionConfiguration?: MultiRegionConfiguration|null,
     *     PendingDeletionWindowInDays?: int<1, 365>|null,
     *     MacAlgorithms?: list<'HMAC_SHA_224'|'HMAC_SHA_256'|'HMAC_SHA_384'|'HMAC_SHA_512'>|null,
     *     XksKeyConfiguration?: XksKeyConfigurationType|null,
     *     CurrentKeyMaterialId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
