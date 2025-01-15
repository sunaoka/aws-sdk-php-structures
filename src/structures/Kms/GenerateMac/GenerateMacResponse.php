<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateMac;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Psr\Http\Message\StreamInterface $Mac
 * @property 'HMAC_SHA_224'|'HMAC_SHA_256'|'HMAC_SHA_384'|'HMAC_SHA_512'|null $MacAlgorithm
 * @property string|null $KeyId
 */
class GenerateMacResponse extends Response
{
}
