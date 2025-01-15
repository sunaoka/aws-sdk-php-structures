<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateDataKey;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Psr\Http\Message\StreamInterface|null $CiphertextBlob
 * @property \Psr\Http\Message\StreamInterface|null $Plaintext
 * @property string|null $KeyId
 * @property \Psr\Http\Message\StreamInterface|null $CiphertextForRecipient
 */
class GenerateDataKeyResponse extends Response
{
}
