<?php

namespace Sunaoka\Aws\Structures\Kms;

class KmsClient extends \Aws\Kms\KmsClient
{
    use CancelKeyDeletion\CancelKeyDeletionTrait;
    use ConnectCustomKeyStore\ConnectCustomKeyStoreTrait;
    use CreateAlias\CreateAliasTrait;
    use CreateCustomKeyStore\CreateCustomKeyStoreTrait;
    use CreateGrant\CreateGrantTrait;
    use CreateKey\CreateKeyTrait;
    use Decrypt\DecryptTrait;
    use DeleteAlias\DeleteAliasTrait;
    use DeleteCustomKeyStore\DeleteCustomKeyStoreTrait;
    use DeleteImportedKeyMaterial\DeleteImportedKeyMaterialTrait;
    use DeriveSharedSecret\DeriveSharedSecretTrait;
    use DescribeCustomKeyStores\DescribeCustomKeyStoresTrait;
    use DescribeKey\DescribeKeyTrait;
    use DisableKey\DisableKeyTrait;
    use DisableKeyRotation\DisableKeyRotationTrait;
    use DisconnectCustomKeyStore\DisconnectCustomKeyStoreTrait;
    use EnableKey\EnableKeyTrait;
    use EnableKeyRotation\EnableKeyRotationTrait;
    use Encrypt\EncryptTrait;
    use GenerateDataKey\GenerateDataKeyTrait;
    use GenerateDataKeyPair\GenerateDataKeyPairTrait;
    use GenerateDataKeyPairWithoutPlaintext\GenerateDataKeyPairWithoutPlaintextTrait;
    use GenerateDataKeyWithoutPlaintext\GenerateDataKeyWithoutPlaintextTrait;
    use GenerateMac\GenerateMacTrait;
    use GenerateRandom\GenerateRandomTrait;
    use GetKeyPolicy\GetKeyPolicyTrait;
    use GetKeyRotationStatus\GetKeyRotationStatusTrait;
    use GetParametersForImport\GetParametersForImportTrait;
    use GetPublicKey\GetPublicKeyTrait;
    use ImportKeyMaterial\ImportKeyMaterialTrait;
    use ListAliases\ListAliasesTrait;
    use ListGrants\ListGrantsTrait;
    use ListKeyPolicies\ListKeyPoliciesTrait;
    use ListKeyRotations\ListKeyRotationsTrait;
    use ListKeys\ListKeysTrait;
    use ListResourceTags\ListResourceTagsTrait;
    use ListRetirableGrants\ListRetirableGrantsTrait;
    use PutKeyPolicy\PutKeyPolicyTrait;
    use ReEncrypt\ReEncryptTrait;
    use ReplicateKey\ReplicateKeyTrait;
    use RetireGrant\RetireGrantTrait;
    use RevokeGrant\RevokeGrantTrait;
    use RotateKeyOnDemand\RotateKeyOnDemandTrait;
    use ScheduleKeyDeletion\ScheduleKeyDeletionTrait;
    use Sign\SignTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAlias\UpdateAliasTrait;
    use UpdateCustomKeyStore\UpdateCustomKeyStoreTrait;
    use UpdateKeyDescription\UpdateKeyDescriptionTrait;
    use UpdatePrimaryRegion\UpdatePrimaryRegionTrait;
    use Verify\VerifyTrait;
    use VerifyMac\VerifyMacTrait;
}
