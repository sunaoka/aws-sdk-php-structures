<?php

namespace Sunaoka\Aws\Structures\Kms\VerifyMac;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $KeyId
 * @property bool $MacValid
 * @property 'HMAC_SHA_224'|'HMAC_SHA_256'|'HMAC_SHA_384'|'HMAC_SHA_512' $MacAlgorithm
 */
class VerifyMacResponse extends Response
{
}
