<?php

namespace Sunaoka\Aws\Structures\Kms\DeriveSharedSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property 'ECDH' $KeyAgreementAlgorithm
 * @property string $PublicKey
 * @property list<string> $GrantTokens
 * @property bool $DryRun
 * @property Shapes\RecipientInfo $Recipient
 */
class DeriveSharedSecretRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     KeyAgreementAlgorithm: 'ECDH',
     *     PublicKey: string,
     *     GrantTokens?: list<string>,
     *     DryRun?: bool,
     *     Recipient?: Shapes\RecipientInfo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
