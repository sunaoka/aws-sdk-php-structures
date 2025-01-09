<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutKMSEncryptionKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $kmsEncryptionKeyArn
 */
class PutKMSEncryptionKeyRequest extends Request
{
    /**
     * @param array{kmsEncryptionKeyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
