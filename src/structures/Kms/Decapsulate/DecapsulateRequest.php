<?php

namespace Sunaoka\Aws\Structures\Kms\Decapsulate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string|resource|\Psr\Http\Message\StreamInterface $SharedSecretCiphertextBlob
 * @property 'ML_KEM' $EncapsulationAlgorithm
 * @property list<string>|null $GrantTokens
 * @property bool|null $DryRun
 */
class DecapsulateRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     SharedSecretCiphertextBlob: string|resource|\Psr\Http\Message\StreamInterface,
     *     EncapsulationAlgorithm: 'ML_KEM',
     *     GrantTokens?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
