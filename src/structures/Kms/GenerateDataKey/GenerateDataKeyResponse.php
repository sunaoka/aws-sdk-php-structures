<?php

namespace Sunaoka\Aws\Structures\Kms\GenerateDataKey;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Psr\Http\Message\StreamInterface $CiphertextBlob
 * @property \Psr\Http\Message\StreamInterface $Plaintext
 * @property string|null $KeyId
 * @property \Psr\Http\Message\StreamInterface $CiphertextForRecipient
 * @property string|null $KeyMaterialId
 */
class GenerateDataKeyResponse extends Response
{
}
