<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateDataKeyPairWithoutPlaintext;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $EncryptionContext
 * @property string $KeyId
 * @property 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SM2' $KeyPairSpec
 * @property list<string>|null $GrantTokens
 * @property bool|null $DryRun
 */
class GenerateDataKeyPairWithoutPlaintextRequest extends Request
{
    /**
     * @param array{
     *     EncryptionContext?: array<string, string>|null,
     *     KeyId: string,
     *     KeyPairSpec: 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SM2',
     *     GrantTokens?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
