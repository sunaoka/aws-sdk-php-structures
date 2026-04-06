<?php

namespace Sunaoka\Aws\Structures\Kms\CreateGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string $GranteePrincipal
 * @property string|null $RetiringPrincipal
 * @property list<'Decrypt'|'Encrypt'|'GenerateDataKey'|'GenerateDataKeyWithoutPlaintext'|'ReEncryptFrom'|'ReEncryptTo'|'Sign'|'Verify'|'GetPublicKey'|'CreateGrant'|'RetireGrant'|'DescribeKey'|'GenerateDataKeyPair'|'GenerateDataKeyPairWithoutPlaintext'|'GenerateMac'|'VerifyMac'|'DeriveSharedSecret'> $Operations
 * @property Shapes\GrantConstraints|null $Constraints
 * @property list<string>|null $GrantTokens
 * @property string|null $Name
 * @property bool|null $DryRun
 */
class CreateGrantRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     GranteePrincipal: string,
     *     RetiringPrincipal?: string|null,
     *     Operations: list<'Decrypt'|'Encrypt'|'GenerateDataKey'|'GenerateDataKeyWithoutPlaintext'|'ReEncryptFrom'|'ReEncryptTo'|'Sign'|'Verify'|'GetPublicKey'|'CreateGrant'|'RetireGrant'|'DescribeKey'|'GenerateDataKeyPair'|'GenerateDataKeyPairWithoutPlaintext'|'GenerateMac'|'VerifyMac'|'DeriveSharedSecret'>,
     *     Constraints?: Shapes\GrantConstraints|null,
     *     GrantTokens?: list<string>|null,
     *     Name?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
