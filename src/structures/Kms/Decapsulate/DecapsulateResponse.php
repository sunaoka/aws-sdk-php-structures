<?php

namespace Sunaoka\Aws\Structures\Kms\Decapsulate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $KeyId
 * @property \Psr\Http\Message\StreamInterface $SharedSecret
 * @property 'ML_KEM'|null $EncapsulationAlgorithm
 */
class DecapsulateResponse extends Response
{
}
