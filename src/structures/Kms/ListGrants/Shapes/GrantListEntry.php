<?php

namespace Sunaoka\Aws\Structures\Kms\ListGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyId
 * @property string $GrantId
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property string $GranteePrincipal
 * @property string $RetiringPrincipal
 * @property string $IssuingAccount
 * @property list<'Decrypt'|'Encrypt'|'GenerateDataKey'|'GenerateDataKeyWithoutPlaintext'|'ReEncryptFrom'|'ReEncryptTo'|'Sign'|'Verify'|'GetPublicKey'|'CreateGrant'|'RetireGrant'|'DescribeKey'|'GenerateDataKeyPair'|'GenerateDataKeyPairWithoutPlaintext'|'GenerateMac'|'VerifyMac'|'DeriveSharedSecret'> $Operations
 * @property GrantConstraints $Constraints
 */
class GrantListEntry extends Shape
{
    /**
     * @param array{
     *     KeyId?: string,
     *     GrantId?: string,
     *     Name?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     GranteePrincipal?: string,
     *     RetiringPrincipal?: string,
     *     IssuingAccount?: string,
     *     Operations?: list<'Decrypt'|'Encrypt'|'GenerateDataKey'|'GenerateDataKeyWithoutPlaintext'|'ReEncryptFrom'|'ReEncryptTo'|'Sign'|'Verify'|'GetPublicKey'|'CreateGrant'|'RetireGrant'|'DescribeKey'|'GenerateDataKeyPair'|'GenerateDataKeyPairWithoutPlaintext'|'GenerateMac'|'VerifyMac'|'DeriveSharedSecret'>,
     *     Constraints?: GrantConstraints
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
