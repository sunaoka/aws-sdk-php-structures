<?php

namespace Sunaoka\Aws\Structures\Kms\Encapsulate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $KeyId
 * @property \Psr\Http\Message\StreamInterface $SharedSecret
 * @property \Psr\Http\Message\StreamInterface $SharedSecretCiphertextBlob
 * @property 'ML_KEM'|null $EncapsulationAlgorithm
 */
class EncapsulateResponse extends Response
{
}
