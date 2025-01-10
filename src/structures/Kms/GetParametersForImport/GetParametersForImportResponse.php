<?php

namespace Sunaoka\Aws\Structures\Kms\GetParametersForImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $KeyId
 * @property \Psr\Http\Message\StreamInterface $ImportToken
 * @property \Psr\Http\Message\StreamInterface $PublicKey
 * @property \Aws\Api\DateTimeResult $ParametersValidTo
 */
class GetParametersForImportResponse extends Response
{
}
