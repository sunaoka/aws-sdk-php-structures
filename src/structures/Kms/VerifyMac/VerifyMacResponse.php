<?php

namespace Sunaoka\Aws\Structures\Kms\VerifyMac;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $KeyId
 * @property bool|null $MacValid
 * @property 'HMAC_SHA_224'|'HMAC_SHA_256'|'HMAC_SHA_384'|'HMAC_SHA_512'|null $MacAlgorithm
 */
class VerifyMacResponse extends Response
{
}
