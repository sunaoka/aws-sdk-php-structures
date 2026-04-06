<?php

namespace Sunaoka\Aws\Structures\Kms\ListGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyId
 * @property string|null $GrantId
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $GranteePrincipal
 * @property string|null $RetiringPrincipal
 * @property string|null $IssuingAccount
 * @property list<'Decrypt'|'Encrypt'|'GenerateDataKey'|'GenerateDataKeyWithoutPlaintext'|'ReEncryptFrom'|'ReEncryptTo'|'Sign'|'Verify'|'GetPublicKey'|'CreateGrant'|'RetireGrant'|'DescribeKey'|'GenerateDataKeyPair'|'GenerateDataKeyPairWithoutPlaintext'|'GenerateMac'|'VerifyMac'|'DeriveSharedSecret'>|null $Operations
 * @property GrantConstraints|null $Constraints
 */
class GrantListEntry extends Shape
{
    /**
     * @param array{
     *     KeyId?: string|null,
     *     GrantId?: string|null,
     *     Name?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     GranteePrincipal?: string|null,
     *     RetiringPrincipal?: string|null,
     *     IssuingAccount?: string|null,
     *     Operations?: list<'Decrypt'|'Encrypt'|'GenerateDataKey'|'GenerateDataKeyWithoutPlaintext'|'ReEncryptFrom'|'ReEncryptTo'|'Sign'|'Verify'|'GetPublicKey'|'CreateGrant'|'RetireGrant'|'DescribeKey'|'GenerateDataKeyPair'|'GenerateDataKeyPairWithoutPlaintext'|'GenerateMac'|'VerifyMac'|'DeriveSharedSecret'>|null,
     *     Constraints?: GrantConstraints|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
