<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateDataKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $EncryptionContext
 * @property string $KeyId
 * @property 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SM2'|'ECC_NIST_EDWARDS25519' $KeyPairSpec
 * @property list<string>|null $GrantTokens
 * @property Shapes\RecipientInfo|null $Recipient
 * @property bool|null $DryRun
 */
class GenerateDataKeyPairRequest extends Request
{
    /**
     * @param array{
     *     EncryptionContext?: array<string, string>|null,
     *     KeyId: string,
     *     KeyPairSpec: 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SM2'|'ECC_NIST_EDWARDS25519',
     *     GrantTokens?: list<string>|null,
     *     Recipient?: Shapes\RecipientInfo|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
