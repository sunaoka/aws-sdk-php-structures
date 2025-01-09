<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateDataKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $EncryptionContext
 * @property string $KeyId
 * @property 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SM2' $KeyPairSpec
 * @property list<string> $GrantTokens
 * @property Shapes\RecipientInfo $Recipient
 * @property bool $DryRun
 */
class GenerateDataKeyPairRequest extends Request
{
    /**
     * @param array{
     *     EncryptionContext?: array<string, string>,
     *     KeyId: string,
     *     KeyPairSpec: 'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'|'ECC_SECG_P256K1'|'SM2',
     *     GrantTokens?: list<string>,
     *     Recipient?: Shapes\RecipientInfo,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
