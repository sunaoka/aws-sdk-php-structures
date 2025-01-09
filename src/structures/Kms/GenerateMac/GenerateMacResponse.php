<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateMac;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Mac
 * @property 'HMAC_SHA_224'|'HMAC_SHA_256'|'HMAC_SHA_384'|'HMAC_SHA_512' $MacAlgorithm
 * @property string $KeyId
 */
class GenerateMacResponse extends Response
{
}
