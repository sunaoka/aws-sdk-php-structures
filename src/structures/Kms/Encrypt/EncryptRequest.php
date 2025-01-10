<?php

namespace Sunaoka\Aws\Structures\Kms\Encrypt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string|resource|\Psr\Http\Message\StreamInterface $Plaintext
 * @property array<string, string> $EncryptionContext
 * @property list<string> $GrantTokens
 * @property 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE' $EncryptionAlgorithm
 * @property bool $DryRun
 */
class EncryptRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     Plaintext: string|resource|\Psr\Http\Message\StreamInterface,
     *     EncryptionContext?: array<string, string>,
     *     GrantTokens?: list<string>,
     *     EncryptionAlgorithm?: 'SYMMETRIC_DEFAULT'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'SM2PKE',
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
