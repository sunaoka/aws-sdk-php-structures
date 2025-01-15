<?php

namespace Sunaoka\Aws\Structures\signer\SignPayload;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $jobId
 * @property string|null $jobOwner
 * @property array<string, string>|null $metadata
 * @property \Psr\Http\Message\StreamInterface $signature
 */
class SignPayloadResponse extends Response
{
}
