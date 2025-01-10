<?php

namespace Sunaoka\Aws\Structures\signer\SignPayload;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property string $jobOwner
 * @property array<string, string> $metadata
 * @property \Psr\Http\Message\StreamInterface $signature
 */
class SignPayloadResponse extends Response
{
}
