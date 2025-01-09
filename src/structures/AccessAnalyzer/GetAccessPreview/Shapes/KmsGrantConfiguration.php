<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'CreateGrant'|'Decrypt'|'DescribeKey'|'Encrypt'|'GenerateDataKey'|'GenerateDataKeyPair'|'GenerateDataKeyPairWithoutPlaintext'|'GenerateDataKeyWithoutPlaintext'|'GetPublicKey'|'ReEncryptFrom'|'ReEncryptTo'|'RetireGrant'|'Sign'|'Verify'> $operations
 * @property string $granteePrincipal
 * @property string $retiringPrincipal
 * @property KmsGrantConstraints $constraints
 * @property string $issuingAccount
 */
class KmsGrantConfiguration extends Shape
{
    /**
     * @param array{
     *     operations: list<'CreateGrant'|'Decrypt'|'DescribeKey'|'Encrypt'|'GenerateDataKey'|'GenerateDataKeyPair'|'GenerateDataKeyPairWithoutPlaintext'|'GenerateDataKeyWithoutPlaintext'|'GetPublicKey'|'ReEncryptFrom'|'ReEncryptTo'|'RetireGrant'|'Sign'|'Verify'>,
     *     granteePrincipal: string,
     *     retiringPrincipal?: string,
     *     constraints?: KmsGrantConstraints,
     *     issuingAccount: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
