<?php

namespace Sunaoka\Aws\Structures\Kms\CreateKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AWSAccountId
 * @property string $KeyId
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property bool $Enabled
 * @property string $Description
 * @property 'SIGN_VERIFY'|'ENCRYPT_DECRYPT'|'GENERATE_VERIFY_MAC'|'KEY_AGREEMENT' $KeyUsage
 * @property 'Creating'|'Enabled'|'Disabled'|'PendingDeletion'|'PendingImport'|'PendingReplicaDeletion'|'Unavailable'|'Updating' $KeyState
 * @property \Aws\Api\DateTimeResult $DeletionDate
 * @property \Aws\Api\DateTimeResult $ValidTo
 * @property 'AWS_KMS'|'EXTERNAL'|'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE' $Origin
 * @property string $CustomKeyStoreId
 * @property string $CloudHsmClusterId
 * @property 'KEY_MATERIAL_EXPIRES'|'KEY_MATERIAL_DOES_NOT_EXPIRE' $ExpirationModel
 * @property 'AWS'|'CUSTOMER' $KeyManager
 * @property 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2' $CustomerMasterKeySpec
 * @property 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2' $KeySpec
 * @property list<'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE'> $EncryptionAlgorithms
 * @property list<'RSASSA_PSS_SHA_256'|'RSASSA_PSS_SHA_384'|'RSASSA_PSS_SHA_512'|'RSASSA_PKCS1_V1_5_SHA_256'|'RSASSA_PKCS1_V1_5_SHA_384'|'RSASSA_PKCS1_V1_5_SHA_512'|'ECDSA_SHA_256'|'ECDSA_SHA_384'|'ECDSA_SHA_512'|'SM2DSA'> $SigningAlgorithms
 * @property list<'ECDH'> $KeyAgreementAlgorithms
 * @property bool $MultiRegion
 * @property MultiRegionConfiguration $MultiRegionConfiguration
 * @property int $PendingDeletionWindowInDays
 * @property list<'HMAC_SHA_224'|'HMAC_SHA_256'|'HMAC_SHA_384'|'HMAC_SHA_512'> $MacAlgorithms
 * @property XksKeyConfigurationType $XksKeyConfiguration
 */
class KeyMetadata extends Shape
{
    /**
     * @param array{
     *     AWSAccountId?: string,
     *     KeyId: string,
     *     Arn?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     Enabled?: bool,
     *     Description?: string,
     *     KeyUsage?: 'SIGN_VERIFY'|'ENCRYPT_DECRYPT'|'GENERATE_VERIFY_MAC'|'KEY_AGREEMENT',
     *     KeyState?: 'Creating'|'Enabled'|'Disabled'|'PendingDeletion'|'PendingImport'|'PendingReplicaDeletion'|'Unavailable'|'Updating',
     *     DeletionDate?: \Aws\Api\DateTimeResult,
     *     ValidTo?: \Aws\Api\DateTimeResult,
     *     Origin?: 'AWS_KMS'|'EXTERNAL'|'AWS_CLOUDHSM'|'EXTERNAL_KEY_STORE',
     *     CustomKeyStoreId?: string,
     *     CloudHsmClusterId?: string,
     *     ExpirationModel?: 'KEY_MATERIAL_EXPIRES'|'KEY_MATERIAL_DOES_NOT_EXPIRE',
     *     KeyManager?: 'AWS'|'CUSTOMER',
     *     CustomerMasterKeySpec?: 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2',
     *     KeySpec?: 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SYMMETRIC_DEFAULT'|'HMAC_224'|'HMAC_256'|'HMAC_384'|'HMAC_512'|'SM2',
     *     EncryptionAlgorithms?: list<'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE'>,
     *     SigningAlgorithms?: list<'RSASSA_PSS_SHA_256'|'RSASSA_PSS_SHA_384'|'RSASSA_PSS_SHA_512'|'RSASSA_PKCS1_V1_5_SHA_256'|'RSASSA_PKCS1_V1_5_SHA_384'|'RSASSA_PKCS1_V1_5_SHA_512'|'ECDSA_SHA_256'|'ECDSA_SHA_384'|'ECDSA_SHA_512'|'SM2DSA'>,
     *     KeyAgreementAlgorithms?: list<'ECDH'>,
     *     MultiRegion?: bool,
     *     MultiRegionConfiguration?: MultiRegionConfiguration,
     *     PendingDeletionWindowInDays?: int,
     *     MacAlgorithms?: list<'HMAC_SHA_224'|'HMAC_SHA_256'|'HMAC_SHA_384'|'HMAC_SHA_512'>,
     *     XksKeyConfiguration?: XksKeyConfigurationType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
