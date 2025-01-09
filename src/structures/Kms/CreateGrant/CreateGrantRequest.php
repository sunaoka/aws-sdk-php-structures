<?php

namespace Sunaoka\Aws\Structures\Kms\CreateGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string $GranteePrincipal
 * @property string $RetiringPrincipal
 * @property list<'Decrypt'|'Encrypt'|'GenerateDataKey'|'GenerateDataKeyWithoutPlaintext'|'ReEncryptFrom'|'ReEncryptTo'|'Sign'|'Verify'|'GetPublicKey'|'CreateGrant'|'RetireGrant'|'DescribeKey'|'GenerateDataKeyPair'|'GenerateDataKeyPairWithoutPlaintext'|'GenerateMac'|'VerifyMac'|'DeriveSharedSecret'> $Operations
 * @property Shapes\GrantConstraints $Constraints
 * @property list<string> $GrantTokens
 * @property string $Name
 * @property bool $DryRun
 */
class CreateGrantRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     GranteePrincipal: string,
     *     RetiringPrincipal?: string,
     *     Operations: list<'Decrypt'|'Encrypt'|'GenerateDataKey'|'GenerateDataKeyWithoutPlaintext'|'ReEncryptFrom'|'ReEncryptTo'|'Sign'|'Verify'|'GetPublicKey'|'CreateGrant'|'RetireGrant'|'DescribeKey'|'GenerateDataKeyPair'|'GenerateDataKeyPairWithoutPlaintext'|'GenerateMac'|'VerifyMac'|'DeriveSharedSecret'>,
     *     Constraints?: Shapes\GrantConstraints,
     *     GrantTokens?: list<string>,
     *     Name?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
