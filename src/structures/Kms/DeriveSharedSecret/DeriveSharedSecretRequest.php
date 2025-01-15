<?php

namespace Sunaoka\Aws\Structures\Kms\DeriveSharedSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property 'ECDH' $KeyAgreementAlgorithm
 * @property string|resource|\Psr\Http\Message\StreamInterface $PublicKey
 * @property list<string>|null $GrantTokens
 * @property bool|null $DryRun
 * @property Shapes\RecipientInfo|null $Recipient
 */
class DeriveSharedSecretRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     KeyAgreementAlgorithm: 'ECDH',
     *     PublicKey: string|resource|\Psr\Http\Message\StreamInterface,
     *     GrantTokens?: list<string>|null,
     *     DryRun?: bool|null,
     *     Recipient?: Shapes\RecipientInfo|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
