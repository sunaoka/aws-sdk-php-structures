<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'CreateGrant'|'Decrypt'|'DescribeKey'|'Encrypt'|'GenerateDataKey'|'GenerateDataKeyPair'|'GenerateDataKeyPairWithoutPlaintext'|'GenerateDataKeyWithoutPlaintext'|'GetPublicKey'|'ReEncryptFrom'|'ReEncryptTo'|'RetireGrant'|'Sign'|'Verify'> $operations
 * @property string $granteePrincipal
 * @property string|null $retiringPrincipal
 * @property KmsGrantConstraints|null $constraints
 * @property string $issuingAccount
 */
class KmsGrantConfiguration extends Shape
{
    /**
     * @param array{
     *     operations: list<'CreateGrant'|'Decrypt'|'DescribeKey'|'Encrypt'|'GenerateDataKey'|'GenerateDataKeyPair'|'GenerateDataKeyPairWithoutPlaintext'|'GenerateDataKeyWithoutPlaintext'|'GetPublicKey'|'ReEncryptFrom'|'ReEncryptTo'|'RetireGrant'|'Sign'|'Verify'>,
     *     granteePrincipal: string,
     *     retiringPrincipal?: string|null,
     *     constraints?: KmsGrantConstraints|null,
     *     issuingAccount: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
